<?php

namespace App\Http\Controllers;

use App\social_region;
use App\social_region_category;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SocialRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return social_region[]|Collection|Response
     */
    public function index(){

        $social_region = social_region::all();
        return view('user.backend.social_region.social_region.social_area_list',compact(['social_region']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $social_region_categories = social_region_category::all();
       return view('user.backend.social_region.social_region.social_area',compact(['social_region_categories']));
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
            'social_region_title' => 'required',
            'file'  =>  'required | mimes:pdf,png,jpg,jpeg,zip',
            'social_region_date' =>  'required',
            'social_region_category_id' =>   'required'
        ]);
        $OriginalFileName = $request->file('file')->getClientOriginalName();
        $ext = $request->FILE('file')->getClientOriginalExtension();
        $FileNameToStore = 'social_region'.time().'.'.$ext;
        $request->file('file')->storeAs('public/assets/social_region',$FileNameToStore);

        $store = new social_region();
        $store->social_region_title  =   $request->social_region_title;
        $store->file    =  $FileNameToStore;
        $store->social_region_date   =   $request->social_region_date;
        $store->social_region_category_id    =   $request->social_region_category_id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param social_region $social_region
     * @return void
     */
    public function show(social_region $social_region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param social_region $social_region
     * @return social_region
     */
    public function edit(social_region $social_region)
    {
        $social_region_categories = social_region_category::all();
        return view('user.backend.social_region.update.social_region_update',compact(['social_region_categories','social_region']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param social_region $social_region
     * @return RedirectResponse
     */
    public function update(Request $request, social_region $social_region)
    {
        $request->validate([
            'social_region_title' => 'required',
            'file'  =>  'nullable | mimes:pdf,png,jpg,jpeg,zip',
            'social_region_date' =>  'required',
            'social_region_category_id' =>   'required'
        ]);
        $path = 'storage/assets/social_region/';

        $social_region->social_region_title  =   $request->social_region_title;
        if ($request->hasFile('file')) {
            $ext_file = $path.$social_region->file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('file')->getClientOriginalExtension();
            $FileNameToStore = 'social_region' . time() . '.' . $ext;
            $request->file('file')->storeAs('public/assets/social_region', $FileNameToStore);
            $social_region->file    =   $FileNameToStore;
        }

        $social_region->social_region_date   =   $request->social_region_date;
        $social_region->social_region_category_id    =   $request->social_region_category_id;
        $social_region->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param social_region $social_region
     * @return RedirectResponse
     */
    public function destroy(social_region $social_region)
    {

        $path = 'storage/assets/dastabej/';
        $ext_file = $path.$social_region->file;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $social_region->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
