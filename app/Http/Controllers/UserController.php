<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index(Request $request)
    {
        // if (!Gate::allows('viewAny', $request->user())) abort(403);
        return response()->json(User::orderByDesc('id')->get(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = User::where( 'email', strtolower($request->email) )->first();
        if (!isset($user)) {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'state' => 'init',
                'type' => $request->type,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'email' => $request->email,
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

            
            // On génère un token pour le nouvel utilisateur
            $token = $user->createToken('authToken');
            return response()->json([
                'user' => $user,
                'access_token' => $token->plainTextToken,
                'token_type' => 'bearer'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Compte existant avec cet e-mail !', 
                'status' => 500
            ]);
        }    
    }

    public function show(Request $request)
    {
        // if (!Gate::allows('show', $request->user())) abort(403);
        return response()->json(User::find($request->id), 200);
    }

    public function edit(Request $request)
    {
        // if (!Gate::allows('edit', $request->user())) abort(403);
        // return response()->json($request->user(), 200);
    }

    public function update(Request $request, string $id)
    {
        $user = User::where( 'email', strtolower($request->email) )->first();
        if (!isset($user)) {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'state' => 'init',
                'type' => $request->type,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'email' => $request->email,
                'password' => $request->password,
                'info' => $request->info ?? [],
            ]);
            return response()->json(['message' => 'Utilisateur modifié avec succès'], 200);
        }
        else {
            return response()->json(['message' => 'Cet e-mail existe déjà en base de donnée'], 500);
        }
    }

    public function destroy(Request $request)
    {
        // if (!Gate::allows('delete', $request->user())) abort(403);
        User::find($request->id)->delete();
        return response(200); 
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Identifiants incorrect !'], 401);
        }
        $token = $request->user()->createToken('authToken');
        return response()->json([
            'user' => Auth::user(),
            'access_token' => $token->plainTextToken,
            'token_type' => 'bearer'
        ], 200);
    }

    public function logout (string $id)   
    {
        User::find($id)->tokens()->delete();  
        return response(['message' => 'Deconnexion ...'],200);     
    }

    public function password (Request $request)   
    {
        // if (!Gate::allows('password', $request->user())) abort(403);
        $request->user()->update([ 'password' => $request->new_password ]);
        return response(['message' => 'Mot de passe changé avec succès ...'],200);
    }

    public function state (Request $request)   
    {
        // if (!Gate::allows('state', $request->user())) abort(403);
        switch ($request->status) {
            case false:
                User::find($request->id)->update([ 'state' => 'refuse' ]);
            break;

            case true:
                User::find($request->id)->update([ 'state' => 'enabled' ]);
            break;

            case 'disabled':
                User::find($request->id)->update([ 'state' => 'disabled' ]);
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
