<?php

namespace App\Http\Controllers\api;

use App\bill;
use App\Http\Controllers\Controller;
use App\Http\Resources\BillResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return BillResource::collection(bill::orderby('post_date','desc')->get());
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
     * @param bill $bill
     * @return void
     */
    public function show(bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param bill $bill
     * @return void
     */
    public function edit(bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param bill $bill
     * @return void
     */
    public function update(Request $request, bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param bill $bill
     * @return void
     */
    public function destroy(bill $bill)
    {
        //
    }
}
