<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\SliderResource;
use App\infrastructure;
use App\slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $slider = slider::all();
       return SliderResource::collection($slider);
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
     * @param slider $slider
     * @return Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param slider $slider
     * @return void
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param slider $slider
     * @return void
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param slider $slider
     * @return void
     */
    public function destroy(slider $slider)
    {
        //
    }
}
