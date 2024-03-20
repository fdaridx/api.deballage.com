<?php

namespace App\Http\Controllers;

use App\Models\Rewiew;
use Illuminate\Http\Request;

class RewiewController extends Controller
{
    public function index()
    {
        return response()->json(Rewiew::all(), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Rewiew $rewiew)
    {
        //
    }

    public function edit(Rewiew $rewiew)
    {
        //
    }

    public function update(Request $request, Rewiew $rewiew)
    {
        //
    }

    public function destroy(Rewiew $rewiew)
    {
        //
    }
}
