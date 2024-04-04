<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\PhotoResource;
use App\photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return PhotoResource::collection(photo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param photo $photo
     * @return PhotoResource
     */
    public function show(photo $photo)
    {
        return new PhotoResource($photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param photo $photo
     * @return Response
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param photo $photo
     * @return Response
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param photo $photo
     * @return Response
     */
    public function destroy(photo $photo)
    {
        //
    }
}
