<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        $data = [
            'data' => Cliente::all(),
            'total' => Cliente::count(),
        ];

        return response($data);
    }

    public function store(Request $request)
    {
        Cliente::create($request->data);
    }

    public function show($id)
    {
        return response(Cliente::find($id));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->data);
    }


    public function destroy($id)
    {
        Cliente::destroy($id);
    }
}
