<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\header
     */
    public function index()
    {
        return new \App\Http\Resources\header(header::find(1));
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
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, header $header)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(header $header)
    {
        //
    }
}
