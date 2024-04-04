<?php

namespace App\Http\Controllers;

use App\heading_detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $header_detail = heading_detail::find(1);
        return $header_detail;
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
     * @param heading_detail $heading_detail
     * @return void
     */
    public function show(heading_detail $heading_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param heading_detail $heading_detail
     * @return void
     */
    public function edit(heading_detail $heading_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'education_detail'  =>  'required',
            'health_detail' =>  'required',
            'social_development_detail' =>  'required',
            'youth_sports_detail'   =>  'required',
            'labour_employee_detail'    =>  'required',
            'language_culture_detail'   =>  'required',
        ]);
        $heading_detail = heading_detail::find(1);
        $heading_detail->education_detail   =   $request->education_detail;
        $heading_detail->health_detail  =   $request->health_detail;
        $heading_detail->social_development_detail  =   $request->social_development_detail;
        $heading_detail->youth_sports_detail    =   $request->youth_sports_detail;
        $heading_detail->labour_employee_detail =   $request->labour_employee_detail;
        $heading_detail->language_culture_detail    =   $request->language_culture_detail;
        $heading_detail->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param heading_detail $heading_detail
     * @return Response
     */
    public function destroy(heading_detail $heading_detail)
    {
        //
    }
}
