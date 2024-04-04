<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\NoticeCategoryResource;
use App\Http\Resources\NoticeResource;
use App\notice_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class NoticeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return NoticeCategoryResource::collection(notice_category::all());
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

    }

    /**
     * Display the specified resource.
     *
     * @param notice_category $notice_category
     * @return AnonymousResourceCollection
     */
    public function show(notice_category $notice_category)
    {
        $notices   =   $notice_category->notices()->where('status',0)->orderBy('notice_date','desc')->get();
        return   NoticeResource::collection($notices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param notice_category $notice_category
     * @return Response
     */
    public function edit(notice_category $notice_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param notice_category $notice_category
     * @return Response
     */
    public function update(Request $request, notice_category $notice_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param notice_category $notice_category
     * @return Response
     */
    public function destroy(notice_category $notice_category)
    {
        //
    }
}
