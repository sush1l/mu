<?php

namespace App\Http\Controllers;

use App\sub_ordinate_office;
use App\directorate;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubOrdinateOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return sub_ordinate_office[]|Collection|Response
     */
    public function index()
    {
        $sub_ordinate_offices=sub_ordinate_office::all();
        return view('user.backend.directrotes.karyalayalist',compact(['sub_ordinate_offices']));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $directorates=directorate::all();
        return view('user.backend.directrotes.karyalaya',compact(['directorates']));
        
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
            'sub_ordinate_name'  =>  'required',
            'sub_ordinate_phone' =>  'nullable | numeric | min:8',
            'sub_ordinate_email' =>  'nullable | email',
            'sub_ordinate_website'   =>  'nullable | url',
            'directorate_id'=>'required'
        ]);
        $store = new sub_ordinate_office;
        $store->sub_ordinate_name    =   $request->sub_ordinate_name;
        $store->sub_ordinate_phone   =   $request->sub_ordinate_phone;
        $store->sub_ordinate_email   =   $request->sub_ordinate_email;
        $store->sub_ordinate_website =   $request->sub_ordinate_website;
        $store->directorate_id =   $request->directorate_id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sub_ordinate_office  $sub_ordinate_office
     * @return Response
     */
    public function show(sub_ordinate_office $sub_ordinate_office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sub_ordinate_office  $sub_ordinate_office
     * @return sub_ordinate_office
     */
    public function edit(sub_ordinate_office $sub_ordinate_office)
    {
        $directorates=directorate::all();
        return view('user.backend.directrotes.sub_ordinate',compact(['directorates','sub_ordinate_office']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\sub_ordinate_office  $sub_ordinate_office
     * @return RedirectResponse
     */
    public function update(Request $request, sub_ordinate_office $sub_ordinate_office)
    {
        $request->validate([
            'sub_ordinate_name'  =>  'required',
            'sub_ordinate_phone' =>  'nullable | numeric | min:8',
            'sub_ordinate_email' =>  'nullable | email',
            'sub_ordinate_website'   =>  'nullable | url',
            'directorate_id'=>'required'
        ]);

        $sub_ordinate_office->sub_ordinate_name    =   $request->sub_ordinate_name;
        $sub_ordinate_office->sub_ordinate_phone   =   $request->sub_ordinate_phone;
        $sub_ordinate_office->sub_ordinate_email   =   $request->sub_ordinate_email;
        $sub_ordinate_office->sub_ordinate_website =   $request->sub_ordinate_website;
        $sub_ordinate_office->directorate_id =   $request->directorate_id;
        $sub_ordinate_office->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sub_ordinate_office  $sub_ordinate_office
     * @return Response
     */
    public function destroy(sub_ordinate_office $sub_ordinate_office)
    {
       dd($sub_ordinate_office->sub_ordinate_phone);
    }
}
