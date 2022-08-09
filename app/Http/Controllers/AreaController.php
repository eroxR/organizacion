<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Http\Requests\StoreareaRequest;
use App\Http\Requests\UpdateareaRequest;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $areas = area::all();

        return view('area.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreareaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreareaRequest $request)
    {
        //
         area::create([

            'nombre' => $request->nombreArea
        ]);
        // $area = request()->except('_token');
        // return response()->json($area);
        // area::insert($area);

        return redirect()->action([AreaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $area = area::findOrFail($id);
        return view('area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateareaRequest  $request
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateareaRequest $request, area $area)
    {
        //

        $area->nombre = $request->nombreArea;

        $area->save();
        return redirect()->action([AreaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        area::destroy($id);

        return redirect('area');
    }
}
