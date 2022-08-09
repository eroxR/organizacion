<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Http\Requests\StoreempleadoRequest;
use App\Http\Requests\UpdateempleadoRequest;
use App\Models\area;
use App\Models\roles;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $empleados['empleados'] = empleado::paginate(7);

        $empleados = empleado::join('areas', 'areas.id', '=', 'area_id')
        ->select('empleados.id','empleados.nombre as emplead', 'email', 'sexo', 'areas.nombre', 'boletin', 'descripcion')->get();


        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $areas = area::all();
        $roles = roles::all();

        return view('empleado.create', compact('areas', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreempleadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreempleadoRequest $request)
    {
        //
        // $request->validate([
        //     'nombre' => 'required',
        //     'email' => 'required|email',
        //     'sex' => 'required',
        //     'area' => 'required',
        //     'descripcion' => 'required',
        //     'rol' => 'required',
        // ]);

        if ($request->boletin != 1) {
            $boletin = 0;
        } else {
            $boletin = $request->boletin;
        }

        $datosempleado = empleado::create([

            'nombre' => $request->nombre,
            'email' => $request->email,
            'sexo' => $request->sex,
            'area_id' => $request->area,
            'boletin' => $boletin,
            'descripcion' => $request->descripcion,
        ]);

        foreach ($request->rol as $rol => $id) {

            $datosempleado->roles()->attach([$rol => $id]);
        }

        return redirect()->action([EmpleadoController::class, 'index']);
        // $datosempleado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $areas = area::all();
        $roles = roles::all();
        $rolesactual = DB::table('empleado_roles')->where('empleado_id', $id)->get();
        $empleado = empleado::findOrFail($id);

        return view('empleado.edit', compact('areas', 'roles', 'empleado', 'rolesactual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateempleadoRequest  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateempleadoRequest $request, empleado $empleado)
    {
        
        if ($request->boletin != 1) {
            $boletin = 0;
        } else {
            $boletin = $request->boletin;
        }


        // $id->update($request->all());

        $empleado->nombre = $request->nombre;
        $empleado->email = $request->email;
        $empleado->sexo = $request->sex;
        $empleado->area_id = $request->area;
        $empleado->boletin = $boletin;
        $empleado->descripcion = $request->descripcion;
        
        $empleado->roles()->detach();
        foreach ($request->rol as $rol => $id) {

            $empleado->roles()->attach([$rol => $id]);
        }
            // $datosempleado = request()->except(['_token','_method','rol']);
            // empleado::where('id','=',$id)->update($datosempleado);

            $empleado->save();
        return redirect()->action([EmpleadoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        empleado::destroy($id);

        return redirect('empleado');
    }
}
