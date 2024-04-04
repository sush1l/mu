<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\NoticeResource;
use App\notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return NoticeResource::collection(notice::where('status',0)->orderBy('notice_date','desc')->get());
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

    public function active(){
        return NoticeResource::collection(notice::where('status',0)->orderBy('notice_date','desc')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notice  $notice
     * @return NoticeResource
     */
    public function show(notice $notice)
    {
        return new NoticeResource($notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        //
    }
}
