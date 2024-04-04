<?php

namespace App\Http\Controllers\api;

use App\download_category;
use App\Http\Controllers\Controller;
use App\Http\Resources\DownloadCategoryResource;
use App\Http\Resources\DownloadResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DownloadCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return DownloadCategoryResource::collection(download_category::all());
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
     * @param download_category $download_category
     * @return AnonymousResourceCollection
     */
    public function show(download_category $download_category)
    {
        $download   =   $download_category->download()->get();
        return   DownloadResource::collection($download);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param download_category $download_category
     * @return void
     */
    public function edit(download_category $download_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param download_category $download_category
     * @return void
     */
    public function update(Request $request, download_category $download_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param download_category $download_category
     * @return void
     */
    public function destroy(download_category $download_category)
    {
        //
    }
}
