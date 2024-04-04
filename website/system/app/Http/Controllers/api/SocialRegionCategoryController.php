<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\SocialRegionCategoryResource;
use App\Http\Resources\SocialRegionResource;
use App\social_region_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class SocialRegionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return SocialRegionCategoryResource::collection(social_region_category::all());
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
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param social_region_category $social_region_category
     * @return AnonymousResourceCollection
     */
    public function show(social_region_category $social_region_category)
    {
        $social_region  =   $social_region_category->social_region()->get();
        return   SocialRegionResource::collection($social_region);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param social_region_category $social_region_category
     * @return void
     */
    public function edit(social_region_category $social_region_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param social_region_category $social_region_category
     * @return void
     */
    public function update(Request $request, social_region_category $social_region_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param social_region_category $social_region_category
     * @return void
     */
    public function destroy(social_region_category $social_region_category)
    {
        //
    }
}
