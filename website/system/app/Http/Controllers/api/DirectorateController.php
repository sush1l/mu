<?php

namespace App\Http\Controllers\api;

use App\directorate;
use App\Http\Controllers\Controller;
use App\Http\Resources\DirectorateResource;
use App\Http\Resources\SubOrdinateOfficeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DirectorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return DirectorateResource::collection(directorate::all());
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
     * @param directorate $directorate
     * @return AnonymousResourceCollection
     */
    public function show(directorate $directorate)
    {
        $office_list = $directorate->sub_ordinates()->get();
        return SubOrdinateOfficeResource::collection($office_list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param directorate $directorate
     * @return Response
     */
    public function edit(directorate $directorate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param directorate $directorate
     * @return Response
     */
    public function update(Request $request, directorate $directorate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param directorate $directorate
     * @return Response
     */
    public function destroy(directorate $directorate)
    {
        //
    }
}
