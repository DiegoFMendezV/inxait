<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GanadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Verificar si hay al menos 5 registros en la base de datos
        $totalParticipantes = Cliente::count();

        if ($totalParticipantes >= 5) {
            // Seleccionar un ganador aleatorio
            $ganador = Cliente::inRandomOrder()->first();

            // Devolver el ganador seleccionado
            return view('ganador', compact ('ganador'));
        } else {
            // No hay suficientes participantes para seleccionar un ganador
            return view('noSuficiente');
        }        
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
