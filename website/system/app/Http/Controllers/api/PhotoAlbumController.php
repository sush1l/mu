<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\PhotoAlbumResource;
use App\Http\Resources\PhotoResource;
use App\photo_album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class PhotoAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return PhotoAlbumResource::collection(photo_album::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param photo_album $photo_album
     * @return AnonymousResourceCollection
     */
    public function show(photo_album $photo_album)
    {
        $photos = $photo_album->photos()->get();
        return PhotoResource::collection($photos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param photo_album $photo_album
     * @return void
     */
    public function edit(photo_album $photo_album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param photo_album $photo_album
     * @return Response
     */
    public function update(Request $request, photo_album $photo_album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param photo_album $photo_album
     * @return Response
     */
    public function destroy(photo_album $photo_album)
    {
        //
    }
}
