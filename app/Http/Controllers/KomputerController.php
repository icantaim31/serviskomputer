<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use App\Http\Requests\StoreKomputerRequest;
use App\Http\Requests\UpdateKomputerRequest;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('komputer.create',['title' => 'Komputer Create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKomputerRequest $request)
    {
        Komputer::create($request->validated());
        return redirect()->route('keluhan.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Komputer $komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komputer $komputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomputerRequest $request, Komputer $komputer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komputer $komputer)
    {
        //
    }
}
