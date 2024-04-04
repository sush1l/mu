<?php

namespace App\Http\Controllers\api;

use App\download;
use App\Http\Controllers\Controller;
use App\Http\Resources\DownloadResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $downloads = download::all();
        return DownloadResource::collection($downloads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param download $download
     * @return DownloadResource
     */
    public function show(download $download)
    {
        return new DownloadResource($download);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param download $download
     * @return void
     */
    public function edit(download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param download $download
     * @return void
     */
    public function update(Request $request, download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param download $download
     * @return void
     */
    public function destroy(download $download)
    {
        //
    }
}
