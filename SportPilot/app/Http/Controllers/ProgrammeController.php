<?php

namespace App\Http\Controllers;

use App\Models\programme;
use App\Http\Requests\StoreprogrammeRequest;
use App\Http\Requests\UpdateprogrammeRequest;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreprogrammeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprogrammeRequest $request, programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(programme $programme)
    {
        //
    }
}
