<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderByDesc('id')->get()->map(function ($setting) {
            $setting->edit_url = route('settings.edit', $setting->id);
            return $setting;
        });
        return response()->json($settings, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $messages = [];
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            $setting = Setting::firstOrCreate([
                'name' => strtolower($request->name),
            ], [
                'name' => strtolower($request->name),
                'value' => strtolower($request->value),
            ]);

            if ($setting->wasRecentlyCreated) {
                return response()->json(['message' => 'Setting crée avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Cet Setting existe déjà !'], 500);
            }
            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function show(Setting $setting)
    {
        //
    }

    public function edit(Setting $setting)
    {
        //
    }

    public function update(Request $request, Setting $setting)
    {
        $messages = [];
        $new_setting = Setting::where('name', $request->name)->get();
                
        if ($request->name == null) {
            $messages[] = "Veuillez renseigner le nom";
        }

        if (count($messages) == 0) {
            if ($new_setting->isEmpty()) {
                $setting->update(['name' => $request->name, 'value' => $request->value,]);
                return response()->json(['message' => 'Setting modifié avec succès !'], 200);
            } else {
                return response()->json(['message' => 'Cet Setting existe déjà !'], 500);
            }            
        } else {
            return response()->json(['messages' => $messages], 500);
        }
    }

    public function destroy(Setting $setting)
    {
        //
    }
}
