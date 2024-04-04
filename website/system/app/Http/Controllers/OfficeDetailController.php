<?php

namespace App\Http\Controllers;

use App\office_detail;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OfficeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $office_detail = office_detail::find(1);
        return view('user.backend.office.officeadd',compact(['office_detail']));
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
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function show(office_detail $office_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(office_detail $office_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, office_detail $office_detail)
    {
        $request->validate([
            'introduction'  =>  'nullable',
            'introduction_date' =>  'nullable | date',
            'aim'   =>  'nullable',
            'aim_date'  =>  'nullable | date',
            'plan'  =>  'nullable',
            'plan_date' =>  'nullable | date',
            'work_area' =>  'nullable',
            'work_area_date'    =>  'nullable | date',
            'organization_structure'    =>  'nullable | mimes:jpg,jpeg,png',
            'organization_structure_date'   =>  'nullable | date',
            'citizen_charter'   =>  'nullable | mimes:jpg,jpeg,png',
            'citizen_charter_date'  =>  'nullable | date',
            'darbandi_structure'    =>  'nullable | mimes:jpg,jpeg,png',
            'darbandi_structure_date'   =>  'nullable | date',
        ]);
        $path = 'storage/assets/office/';
        if ($request->introduction) {
            $office_detail->introduction = $request->introduction;
        }
        if($request->aim) {
            $office_detail->aim = $request->aim;
        }
        if ($request->plan) {
            $office_detail->plan = $request->plan;
        }
        if ($request->work_area) {
            $office_detail->work_area = $request->work_area;
        }
        if ($request->hasFile('organization_structure')) {
            $ext_file = $path.$office_detail->organization_structure;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('organization_structure')->getClientOriginalExtension();
            $FileNameToStore = 'organization_structure.' . $ext;
            $request->file('organization_structure')->storeAs('public/assets/office', $FileNameToStore);
            $office_detail->organization_structure = $FileNameToStore;
        }
        if ($request->hasFile('citizen_charter')) {
            $ext_file = $path.$office_detail->citizen_charter;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $CitizenCharterExt = $request->FILE('citizen_charter')->getClientOriginalExtension();
            $CitizenCharter = 'citizen_charter.' . $CitizenCharterExt;
            $request->file('citizen_charter')->storeAs('public/assets/office', $CitizenCharter);
            $office_detail->citizen_charter = $CitizenCharter;
        }
        if ($request->hasFile('darbandi_structure')) {
            $ext_file = $path.$office_detail->darbandi_structure;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $darbandistructureExt = $request->FILE('darbandi_structure')->getClientOriginalExtension();
            $darbandistructure = 'darbandi_structure.' . $darbandistructureExt;
            $request->file('darbandi_structure')->storeAs('public/assets/office', $darbandistructure);
            $office_detail->darbandi_structure = $darbandistructure;
        }
        $office_detail->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\office_detail  $office_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(office_detail $office_detail)
    {
        //
    }
}
