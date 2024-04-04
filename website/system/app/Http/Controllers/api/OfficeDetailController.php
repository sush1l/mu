<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\OfficeDetailResource;
use App\office_detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return OfficeDetailResource
     */
    public function index()
    {
        return new OfficeDetailResource(office_detail::find(1));
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
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function show(office_detail $office_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(office_detail $office_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office_detail $office_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(office_detail $office_detail)
    {
        //
    }
}
