<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with(['user', 'products'])->orderByDesc('id')->get()->map(function ($shop) {
            $shop->edit_url = route('shops.edit', $shop->id);
            return $shop;
        });
        return response()->json($shops, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $messages = [];
        if (!self::validate($request->intitule, 'string', null, 3)) $messages[] = 'Nom incorrect';

        if (count($messages) == 0) {
            $shop = Shop::where( 'intitule', strtolower($request->intitule) )->first();

            if (!isset($shop)) {
                Shop::create([
                    'profile' => $request->file('profile')->storeAs('', $request->file('profile')->getClientOriginalName()),
                    'intitule' =>strtolower($request->intitule),
                    'state' => 'init',
                    'description' => strtolower($request->description),
                    'user_id' => intval($request->user_id),
                    'info' => $request->info ?? [],
                ]);
                User::find($request->user_id)->update(['type' => 'seller' ]);
            } 
            else {
                return response()->json([
                    'message' => 'cette boutique existe déjà !', 
                    'status' => 500
                ]);
            }   
                        
            foreach (User::where('type', 'admin')->get() as $u) {
                Notification::create([
                    'user_id' => $u->id, 
                    'text' => "Une nouvelle boutique a été crée", 
                    'type' => 'admin',
                    'state' => 'init',
                ]);
            }
    
            return response()->json([
                'message' => "creation reussi !",
            ], 200);
        } 
        else {
            return response()->json([
                'messages' => $messages,
            ], 500);
        }
    }

    public function show(Shop $shop)
    {
        return response()->json($shop->with(['user', 'products'])->get()[0], 200);
    }

    public function edit(Shop $shop)
    {
        //
    }

    public function update(Request $request, Shop $shop)
    {
        $messages = [];
        if (!self::validate($request->intitule, 'string', null, 3)) $messages[] = 'Intitule incorrect';

        if (count($messages) == 0) {
            $new_shop = Shop::where( 'intitule', strtolower($request->intitule) )->first();

            if (!isset($new_shop)) {
                if ($request->profile == null || empty($request->profile) || $request->profile == 'undefined') {
                    $shop->update([
                        'intitule' =>strtolower($request->intitule),
                        'state' => 'init',
                        'description' => strtolower($request->description),
                        'user_id' => intval($request->user_id),
                        'info' => $request->info ?? [],
                    ]);
                } else {
                    $shop->update([
                        'profile' => $request->file('profile')->storeAs('', $request->file('profile')->getClientOriginalName()),
                        'intitule' =>strtolower($request->intitule),
                        'state' => 'init',
                        'description' => strtolower($request->description),
                        'user_id' => intval($request->user_id),
                        'info' => $request->info ?? [],
                    ]);
                }
                
                return response()->json([
                    'message' => "creation reussi !",
                ], 200);
            } 
            else {
                return response()->json([
                    'message' => 'cette boutique existe déjà !', 
                    'status' => 500
                ]);
            }   
        } 
        else {
            return response()->json([
                'messages' => $messages,
            ], 500);
        }
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return response()->json([
            'message' => 'cette boutique existe déjà !', 
            'status' => 500
        ]);
    }
}
