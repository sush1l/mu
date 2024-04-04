<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\PublicationCategoryResource;
use App\Http\Resources\PublicationResource;
use App\publication_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class PublicationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return PublicationCategoryResource::collection(publication_category::all());
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
     * @param publication_category $publication_category
     * @return AnonymousResourceCollection
     */
    public function show(publication_category $publication_category)
    {
        $publication   =   $publication_category->publications()->where('status',0)->orderBy('publication_date','desc')->get();
        return   PublicationResource::collection($publication);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param publication_category $publication_category
     * @return void
     */
    public function edit(publication_category $publication_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param publication_category $publication_category
     * @return void
     */
    public function update(Request $request, publication_category $publication_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param publication_category $publication_category
     * @return void
     */
    public function destroy(publication_category $publication_category)
    {
        //
    }
}
