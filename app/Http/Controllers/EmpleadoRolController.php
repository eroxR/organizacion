<?php

namespace App\Http\Controllers;

use App\Models\empleado_rol;
use App\Http\Requests\Storeempleado_rolRequest;
use App\Http\Requests\Updateempleado_rolRequest;

class EmpleadoRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeempleado_rolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeempleado_rolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado_rol  $empleado_rol
     * @return \Illuminate\Http\Response
     */
    public function show(empleado_rol $empleado_rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado_rol  $empleado_rol
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado_rol $empleado_rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateempleado_rolRequest  $request
     * @param  \App\Models\empleado_rol  $empleado_rol
     * @return \Illuminate\Http\Response
     */
    public function update(Updateempleado_rolRequest $request, empleado_rol $empleado_rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado_rol  $empleado_rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado_rol $empleado_rol)
    {
        //
    }
}
