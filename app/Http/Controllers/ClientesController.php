<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos=Cliente::all();
        return view('clientes', compact ('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => "required|min:3|alpha:ascii",
            'apellido' => "required|min:3|alpha:ascii",
            'cedula' => "required",
            'departamento_id' => "required",
            'ciudad_id' => "required",
            'celular' => "required",
            'correo' => "required|email:rfc,dns",
            'habeas' => "required",
        ]);

        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->departamento = $request->departamento_id;
        $cliente->ciudad = $request->ciudad_id;
        $cliente->celular = $request->celular;
        $cliente->correo = $request->correo;
        $cliente->habeas = $request->habeas;
        $cliente->save();
    

        return redirect()->route('clientes_create')->with('success','Felicidades, su registro ha sido exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
