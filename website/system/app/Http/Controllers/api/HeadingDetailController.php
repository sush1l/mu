<?php

namespace App\Http\Controllers\api;

use App\heading_detail;
use App\Http\Controllers\Controller;
use App\Http\Resources\HeadingDetailResource;
use Illuminate\Http\Request;

class HeadingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return HeadingDetailResource
     */
    public function index()
    {
        return new HeadingDetailResource(heading_detail::find(1));
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
     * @param  \App\heading_detail  $heading_detail
     * @return \Illuminate\Http\Response
     */
    public function show(heading_detail $heading_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\heading_detail  $heading_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(heading_detail $heading_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\heading_detail  $heading_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, heading_detail $heading_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\heading_detail  $heading_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(heading_detail $heading_detail)
    {
        //
    }
}
