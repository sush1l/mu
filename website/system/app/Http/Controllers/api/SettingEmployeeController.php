<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\SettingEmployeeResource;
use App\setting_employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SettingEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $setting_employee = setting_employee::all();
        return SettingEmployeeResource::collection($setting_employee);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting_employee $setting_employee)
    {
        //
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
