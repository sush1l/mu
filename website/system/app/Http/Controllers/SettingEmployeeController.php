<?php

namespace App\Http\Controllers;

use App\setting_employee;
use App\employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        $employees = employee::all();
        $minister = setting_employee::find(1);
        $sachib = setting_employee::find(2);
        $prabakta = setting_employee::find(3);
        $information_officer = setting_employee::find(4);
        return view('user.backend.setting.employeesetting',compact('employees','minister','sachib','prabakta','information_officer'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting_employee  $setting_employee
     * @return \Illuminate\Http\Response
     */
    public function show(setting_employee $setting_employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting_employee  $setting_employee
     * @return \Illuminate\Http\Response
     */
    public function edit(setting_employee $setting_employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting_employee  $setting_employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, setting_employee $setting_employee)
    {
        $request->validate(['employee_id'=>'required | numeric']);
        $setting_employee->employee_id=$request->employee_id;
        $setting_employee->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting_employee  $setting_employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting_employee $setting_employee)
    {
        //
    }
}
