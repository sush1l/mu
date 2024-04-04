<?php

namespace App\Http\Controllers\api;

use App\dastabej_category;
use App\Http\Controllers\Controller;
use App\Http\Resources\DastabejCategoryResource;
use App\Http\Resources\DastabejResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DastabejCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return DastabejCategoryResource::collection(dastabej_category::all());
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
     * @param dastabej_category $dastabej_category
     * @return AnonymousResourceCollection
     */
    public function show(dastabej_category $dastabej_category)
    {
        $dastabej   =   $dastabej_category->dastabej()->get();
       return   DastabejResource::collection($dastabej);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param dastabej_category $dastabej_category
     * @return void
     */
    public function edit(dastabej_category $dastabej_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param dastabej_category $dastabej_category
     * @return Response
     */
    public function update(Request $request, dastabej_category $dastabej_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param dastabej_category $dastabej_category
     * @return Response
     */
    public function destroy(dastabej_category $dastabej_category)
    {
        //
    }
}
