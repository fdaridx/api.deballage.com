<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function index(Request $request)
    {
        // if (!Gate::allows('viewAny', $request->user())) abort(403);
        $users = User::with(['shop'])->orderByDesc('id')->get()->map(function ($user) {
            $user->edit_url = route('users.edit', $user->id);
            $user->state_url = route('users.state', $user->id);
            $user->shop_edit_url = isset($user->shop->id) ? route('shops.edit', $user->shop->id) : '';
            return $user;
        });
        return response()->json($users, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $messages = [];
        if (!self::validate($request->first_name, 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate($request->last_name, 'string', null, 3)) $messages[] = 'Prenom incorrect';
        if (!self::validate(intval($request->phone), 'integer', null, 9)) $messages[] = 'Numero de télephone incorrect';
        if (!self::validate($request->password, null, null, 4)) $messages[] = 'Le mot de passe doit avoir au moins 4 characteres';
        if (!self::validate($request->email, 'string', 'email')) $messages[] = 'Adresse e-mail incorrect';

        // $request->gender !== 'masculin' && $request->gender !== 'feminin' ?: $messages[] = 'Adresse e-mail incorrect';
        if (count($messages) == 0) {
            $user = User::where( 'email', strtolower($request->email) )->first();

            if (!isset($user)) {
                $user = User::create([
                    'first_name' => strtolower($request->first_name),
                    'last_name' =>strtolower($request->last_name),
                    'state' => 'init',
                    'type' => strtolower($request->type),
                    'phone' => intval($request->phone),
                    'gender' => strtolower($request->gender),
                    'email' => strtolower($request->email),
                    'password' => $request->password,
                    'info' => $request->info ?? [],
                ]);
                // On recherche s'il existe un panier avec l'id de la session de l'utilisateur
                $cart = Cart::where('session_id', $request->session_id)->first();
    
                // Si c'est vide cela signifie que c'est ca premiere fois d'arriver sur le site
                // Sinon il est deja venu et la on attribue juste son id au panier
    
                if (!isset($cart)) {
                    Cart::create([
                        'user_id' => $user->id,
                        'session_id' => $request->session_id
                    ]);
                }
                else {
                    $cart->update(['user_id' => $user->id]);
                }
            } 
            else {
                return response()->json([
                    'message' => 'Compte existant avec cet e-mail !', 
                    'status' => 500
                ]);
            }   
            
            if ($user->type == 'seller') {
                $message = 'Le nouveau vendeur '.$user->first_name.' '.$user->last_name.' vient de s\'inscrire sur la plateforme';
            } 
            else if ($user->type == 'user'){
                $message = 'Le nouvel utilisateur '.$user->first_name.' '.$user->last_name.' vient de s\'inscrire sur la plateforme';
            }
            
            foreach (User::where('type', 'admin')->get() as $u) {
                Notification::create([
                    'user_id' => $u->id, 
                    'text' => $message, 
                    'type' => 'admin',
                    'state' => 'init',
                ]);
            }
    
            // On génère un token pour le nouvel utilisateur
            $token = $user->createToken('authToken');
            return response()->json([
                'user' => $user,
                'access_token' => $token->plainTextToken,
                'token_type' => 'bearer'
            ], 200);
        } 
        else {
            return response()->json([
                'messages' => $messages,
            ], 500);
        }
    }

    public function show(User $user)
    {
        // if (!Gate::allows('show', $request->user())) abort(403);
        return response()->json($user->with(['shop'])->get()[0], 200);
    }

    public function edit(Request $request)
    {
        // if (!Gate::allows('edit', $request->user())) abort(403);
        // return response()->json($request->user(), 200);
    }

    public function update(Request $request, User $user)
    {
        $messages = [];

        if (!self::validate($request->first_name, 'string', null, 3)) $messages[] = 'Nom incorrect';
        if (!self::validate($request->last_name, 'string', null, 3)) $messages[] = 'Prenom incorrect';
        if (!self::validate(intval($request->phone), 'integer', null, 9)) $messages[] = 'Numero de télephone incorrect';
        if (!self::validate($request->password, null, null, 4)) $messages[] = 'Le mot de passe doit avoir au moins 4 characteres';
        if (!self::validate($request->email, 'string', 'email')) $messages[] = 'Adresse e-mail incorrect';

        if (count($messages) == 0) {
            $user->update([
                'first_name' => strtolower($request->first_name),
                'last_name' =>strtolower($request->last_name),
                'state' => 'init',
                'type' => strtolower($request->type),
                'phone' => intval($request->phone),
                'gender' => strtolower($request->gender),
                'email' => strtolower($request->email),
                'password' => $request->password,
                'info' => $request->info ?? [],
            ]);
            return response()->json(['message' => 'Utilisateur modifié avec succès'], 200);
        } 
        else {
            return response()->json([
                'messages' => $messages,
            ], 500);
        }
    }

    public function destroy(User $user)
    {
        // if (!Gate::allows('delete', $request->user())) abort(403);
        $user->delete();
        return response(['message' => 'Utilisateur supprimé avec succès !'], 200);
    }

    public function authenticate(Request $request)
    {
        $messages = [];

        if (!self::validate($request->password, null, null, 4)) $messages[] = 'Le mot de passe doit avoir au moins 4 characteres';
        if (!self::validate($request->email, 'string', 'email')) $messages[] = 'Adresse e-mail incorrect';
        
        if(count($messages) == 0){
            if (!Auth::attempt(['email' => strtolower($request->email), 'password' => strtolower($request->password), 'state' => 'enabled'])) return response()->json(['message' => 'Identifiants incorrect !'], 401);
            
            $request->user()->tokens()->delete();
            $token = $request->user()->createToken('authToken', ['new:user']);

            // $token->expires_at = now()->addMinutes(30);
            // now()->addMinutes(30)
            
            return response()->json([
                'message' => 'Connexion reussi',
                'user' => Auth::user(),
                'access_token' => $token->plainTextToken,
            ], 200);

            // return view('admin.dashboard', [
            //     'message' => 'Connexion reussi',
            //     'user' => Auth::user(),
            //     'access_token' => $token->plainTextToken,
            // ]);
        }
        else {
            return response()->json([
                'messages' => $messages
            ], 200);
        }
    }

    public function logout (User $user)   
    {
        $user->tokens()->delete();  
        return to_route('login');     
    }

    public function password ($old = null, $new, User $user = null)   
    {
        // if (!Gate::allows('password', $request->user())) abort(403);
        
        if($user){
            $user->update([ 'password' => $new ]);
            return response(['message' => 'Mot de passe changé avec succès ...'],200);
        }
        else {
            if(Auth::user()->password !== $old){
                return response(['message' => 'Ancien mot de passe incorrect ...'], 401);
            }
            else {
                User::find(Auth::user()->id)->update([ 'password' => $new ]);
            }
        }
    }

    public function state (Request $request, User $user, string $status)   
    {
        // if (!Gate::allows('state', $request->user())) abort(403);
        switch ($status) {
            case false:
                $user->update([ 'state' => 'refuse' ]);
            break;

            case true:
                $user->update([ 'state' => 'enabled' ]);
                if($user->type == "seller"){
                    
                }
            break;

            case 'disabled':
                $user->update([ 'state' => 'disabled' ]);
                if ($user->type == 'seller') {
                    $user->shop->products->update(['state' => 'disabled']);
                }
            break;
        }
        
        return response(['message' => 'l\'Etat du compte a été changé avec succès ...'],200);
    }

    public function type (Request $request)   
    {
        switch ($request->type) {
            case 'user':
                User::find($request->id)->update([ 'type' => 'user' ]);
            break;

            case 'seller':
                User::find($request->id)->update([ 'type' => 'seller' ]);
            break;
        }
        
        return response(['message' => 'Le type du compte a été changé avec succès ...'],200);
    }

    public function searchSeller (Request $request)   
    {
        switch ($request->search) {
            case null || '':
                return response(User::where(['type' => 'seller', 'state' => 'enabled'])->with('shop')->get(),200);
            break;

            default:
                $sellers = User::where('first_name','like','%'.$request->search.'%')
                            ->orWhere('last_name','like','%'.$request->search.'%')
                            ->get();
                return response($sellers->where('type', 'seller')->where('state', 'enabled'), 200);
            break;
        }
    }

}
