<?php

namespace App\Http\Controllers;

use App\department;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return department[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function index()
    {
        $departments = department::all();
     
        return view('user.backend.employee.category.department',compact(['departments'])) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

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
            'department_name'   =>  'required'
        ]);
        $store = new department;
        $store->department_name =  $request->department_name;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param department $department
     * @return void
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param department $department
     * @return department
     */
    public function edit(department $department)
    {
        return view('user.backend.employee.update.department_update',compact(['department']));
}
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param department $department
     * @return RedirectResponse
     */
    public function update(Request $request, department $department)
    {
        $request->validate([
            'department_name'   =>  'required'
        ]);
        $department->department_name =  $request->department_name;
        $department->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param department $department
     * @return RedirectResponse
     */
    public function destroy(department $department)
    {
        $department->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
