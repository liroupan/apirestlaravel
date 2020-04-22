<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
    }

    public function show($id)
    {
        Cliente::findOrFail();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
