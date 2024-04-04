<?php

namespace App\Http\Controllers;

use App\header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = header::find(1);
    return view('user.backend.setting.officesetting',compact(['header']));
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
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\header  $header
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'bg_photo'  =>  'nullable | mimes:jpg,jpeg,png',
            'government'    =>  'required',
            'ministry'    =>  'required',
            'address'    =>  'required',
            'twitter_link'    =>  'nullable',
            'map_iframe'    =>  'nullable',
            'facebook_link'    =>  'nullable',
            'twitter'    =>  'nullable',
            'facebook'    =>  'nullable',
            'instagram'    =>  'nullable',
            'youtube'    =>  'nullable',
            'email'    =>  'nullable',
            'phone'    =>  'nullable',
        ]);
        $path = 'storage/assets/header/';
        $header=header::find(1);
        if ($request->hasFile('bg_photo')) {
            $ext_file = $path.$header->bg_photo;

            
            $OriginalFileName = $request->file('bg_photo')->getClientOriginalName();
//extension
            $ext = $request->FILE('bg_photo')->getClientOriginalExtension();
//File to store
            $FileNameToStore = 'Bg_header.'.$ext;
//moving
            $path = $request->file('bg_photo')->storeAs('public/assets/header',$FileNameToStore);
            $header->bg_photo = $FileNameToStore;
        }
        $header->government   =   $request->government;
        $header->ministry   =   $request->ministry;
        $header->address   =   $request->address;
        $header->twitter_link   =   $request->twitter_link;
        $header->map_iframe   =   $request->map_iframe;
        $header->facebook_link   =   $request->facebook_link;
        $header->twitter   =   $request->twitter;
        $header->facebook   =   $request->facebook;
        $header->instagram   =   $request->instagram;
        $header->youtube   =   $request->youtube;
        $header->email   =   $request->email;
        $header->phone   =   $request->phone;
        $header->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(header $header)
    {
        //
    }
}
