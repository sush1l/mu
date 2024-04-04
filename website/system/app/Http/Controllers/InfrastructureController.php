<?php

namespace App\Http\Controllers;

use App\infrastructure;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infrastructure = infrastructure::orderby('id','desc')->first();
        return view('user.backend.infra.infraadd',compact(['infrastructure']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'school'    =>  'required | numeric | min:0',
            'hospital'  =>  'required | numeric | min:0',
            'employment_office' =>  'required | numeric | min:0',
            'university'    =>  'required | numeric | min:0',
            'population'    =>  'required | numeric | min:0',
            'social_organization'   =>  'required | numeric | min:0',
            'update_date'   =>  'required | date',
        ]);
        $store = new infrastructure;
        $store->school      =   $request->school;
        $store->hospital        =   $request->hospital;
        $store->employment_office       =   $request->employment_office;
        $store->university  =   $request->university;
        $store->population      =   $request->population;
        $store->social_organization         =   $request->social_organization;
        $store->update_date     =   Carbon::today();
        $store->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function show(infrastructure $infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function edit(infrastructure $infrastructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infrastructure $infrastructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(infrastructure $infrastructure)
    {
        //
    }
}
