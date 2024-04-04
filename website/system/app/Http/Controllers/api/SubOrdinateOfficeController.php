<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\SubOrdinateOfficeResource;
use App\sub_ordinate_office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SubOrdinateOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return SubOrdinateOfficeResource::collection(sub_ordinate_office::all());
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
     * @param sub_ordinate_office $sub_ordinate_office
     * @return SubOrdinateOfficeResource
     */
    public function show(sub_ordinate_office $sub_ordinate_office)
    {
        return new SubOrdinateOfficeResource($sub_ordinate_office);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param sub_ordinate_office $sub_ordinate_office
     * @return void
     */
    public function edit(sub_ordinate_office $sub_ordinate_office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param sub_ordinate_office $sub_ordinate_office
     * @return void
     */
    public function update(Request $request, sub_ordinate_office $sub_ordinate_office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param sub_ordinate_office $sub_ordinate_office
     * @return void
     */
    public function destroy(sub_ordinate_office $sub_ordinate_office)
    {
        //
    }
}
