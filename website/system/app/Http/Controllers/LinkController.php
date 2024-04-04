<?php

namespace App\Http\Controllers;

use App\link;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = link::all();
        return view('user.backend.link.link',compact(['links']));
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
        $request->validate([
           'link_name'  =>  'required',
           'url'=>'required | url'
        ]);
        $store  =   new link;
        $store->link_name   =   $request->link_name;
        $store->url =   $request->url;
        $store->save();
        session()->flash('status', 'Data added successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(link $link)
    {
        return view('user.backend.link.linkedit',compact(['link']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, link $link)
    {
        $request->validate([
            'link_name'  =>  'required',
            'url'=>'required | url'
        ]);
        $link->link_name   =   $request->link_name;
        $link->url =   $request->url;
        $link->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $link)
    {
        $link->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
