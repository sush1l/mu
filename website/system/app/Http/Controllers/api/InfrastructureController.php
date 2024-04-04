<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\infrastructureResource;
use App\infrastructure;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return infrastructureResource
     */
    public function index()
    {
        $infrastructure = infrastructure::orderby('id','desc')->first();
        return new infrastructureResource($infrastructure);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function show(infrastructure $infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function edit(infrastructure $infrastructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infrastructure $infrastructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(infrastructure $infrastructure)
    {
        //
    }
}
