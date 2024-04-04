<?php

namespace App\Http\Controllers;

use App\designation;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return designation[]|Collection|Response
     */
    public function index()
    {
        $designation = designation::all();
       return view('user.backend.employee.category.designation',compact(['designation'])) ;
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
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation_name'   =>  'required'
        ]);
        $store = new designation();
        $store->designation_name =  $request->designation_name;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param designation $designation
     * @return void
     */
    public function show(designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param designation $designation
     * @return designation
     */
    public function edit(designation $designation)
    {
        return view('user.backend.employee.update.designation_update',compact(['designation']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param designation $designation
     * @return RedirectResponse
     */
    public function update(Request $request, designation $designation)
    {
        $request->validate([
            'designation_name'   =>  'required'
        ]);
        $designation->designation_name =  $request->designation_name;
        $designation->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param designation $designation
     * @return RedirectResponse
     */
    public function destroy(designation $designation)
    {
        $designation->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
