<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanosController extends Controller
{
    public function index()
    {
        $data = [
            'data' => Plano::all(),
            'total' => Plano::count(),
        ];

        return response($data);
    }

    public function store(Request $request)
    {
        Plano::create($request->data);
    }

    public function show($id)
    {
        return response(Plano::find($id));
    }

    public function update(Request $request, $id)
    {
        $cliente = Plano::find($id);
        $cliente->update($request->data);
    }


    public function destroy($id)
    {
        Plano::destroy($id);
    }

}
