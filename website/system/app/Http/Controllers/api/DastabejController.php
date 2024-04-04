<?php

namespace App\Http\Controllers\api;

use App\dastabej;
use App\Http\Controllers\Controller;
use App\Http\Resources\DastabejCategoryResource;
use App\Http\Resources\DastabejResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DastabejController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $dastabejs = dastabej::all();
        return DastabejResource::collection($dastabejs);
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
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param dastabej $dastabej
     * @return DastabejResource
     */
    public function show(dastabej $dastabej)
    {
        return new DastabejResource($dastabej);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param dastabej $dastabej
     * @return Response
     */
    public function edit(dastabej $dastabej)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param dastabej $dastabej
     * @return Response
     */
    public function update(Request $request, dastabej $dastabej)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param dastabej $dastabej
     * @return Response
     */
    public function destroy(dastabej $dastabej)
    {
        //
    }
}
