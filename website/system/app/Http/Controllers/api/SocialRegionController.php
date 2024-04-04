<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\SocialRegionResource;
use App\social_region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class SocialRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $social_regions = social_region::all();
        return SocialRegionResource::collection($social_regions);
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
     * @param social_region $social_region
     * @return SocialRegionResource
     */
    public function show(social_region $social_region)
    {
        return new SocialRegionResource($social_region);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param social_region $social_region
     * @return void
     */
    public function edit(social_region $social_region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param social_region $social_region
     * @return void
     */
    public function update(Request $request, social_region $social_region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param social_region $social_region
     * @return void
     */
    public function destroy(social_region $social_region)
    {
        //
    }
}
