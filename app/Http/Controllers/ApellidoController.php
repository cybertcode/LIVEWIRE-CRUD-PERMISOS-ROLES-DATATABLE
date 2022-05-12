<?php

namespace App\Http\Controllers;

use App\Models\admin\Apellido;
use App\Http\Requests\StoreApellidoRequest;
use App\Http\Requests\UpdateApellidoRequest;

class ApellidoController extends Controller
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
     * @param  \App\Http\Requests\StoreApellidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApellidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Apellido  $apellido
     * @return \Illuminate\Http\Response
     */
    public function show(Apellido $apellido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Apellido  $apellido
     * @return \Illuminate\Http\Response
     */
    public function edit(Apellido $apellido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApellidoRequest  $request
     * @param  \App\Models\admin\Apellido  $apellido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApellidoRequest $request, Apellido $apellido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Apellido  $apellido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apellido $apellido)
    {
        //
    }
}
