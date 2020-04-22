<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Venda;

class VendaController extends Controller
{

    public function index()
    {
        return Venda::all();
    }


    public function store(Request $request)
    {
        Venda::create($request->all());
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
