<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PcrResource;
use App\pcr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pcr' =>   pcr::sum('pcr'),
            'isolation'  =>   pcr::sum('isolation'),
            'quarantine'  =>   pcr::sum('quarantine'),
            'last24pcr' => pcr::where('uploaded_date',Carbon::yesterday())->sum('pcr'),
            'last24isolation' => pcr::where('uploaded_date',Carbon::yesterday())->sum('isolation'),
            'last24quarantine' => pcr::where('uploaded_date',Carbon::yesterday())->sum('quarantine'),
            'pcrReport' =>  route('exportPcr')
        ];
        return new PcrResource($data);
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
     * @param  \App\pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function show(pcr $pcr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function edit(pcr $pcr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pcr $pcr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pcr  $pcr
     * @return \Illuminate\Http\Response
     */
    public function destroy(pcr $pcr)
    {
        //
    }
}
