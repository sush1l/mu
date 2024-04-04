<?php

namespace App\Http\Controllers;

use App\publication;
use App\publication_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = publication::all();
        return view('user.backend.publication.publications.publication_list',compact(['publications']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publication_categories = publication_category::all();
        return view('user.backend.publication.publications.publication',compact(['publication_categories']));
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
            'publication_name'   =>  'required',
            'publication_file'   =>  'required   |   mimes:pdf,png,jpeg,jpg',
            'publication_date'   =>  'required',
            'publication_category_id'    =>  'required',
            'status'    =>  'required',
        ]);
        $ext = $request->FILE('publication_file')->getClientOriginalExtension();
        $FileNameToStore = 'publication_file'.time().'.'.$ext;
        $request->file('publication_file')->storeAs('public/assets/publication',$FileNameToStore);

        $store  =   new publication;
        $store->publication_name =   $request->publication_name;
        $store->publication_file =   $FileNameToStore;
        $store->publication_date =   $request->publication_date;
        $store->publication_category_id  =   $request->publication_category_id;
        $store->status  =   $request->status;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(publication $publication)
    { 
         $publication_categories = publication_category::all();
        return view('user.backend.publication.update.publication_update',compact(['publication_categories','publication']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publication $publication)
    {
        $request->validate([
            'publication_name'   =>  'required',
            'publication_file'   =>  'nullable  |   mimes:pdf,png,jpeg,jpg',
            'publication_date'   =>  'required',
            'publication_category_id'    =>  'required',
            'status'    =>  'required',
            
        ]);


        $path = 'storage/assets/photo/';
        if ($request->hasFile('publication_file')) {
            $ext_file = $path.$publication->publication_file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('publication_file')->getClientOriginalExtension();
            $FileNameToStore = 'publication_file'.time().'.'.$ext;
            $request->file('publication_file')->storeAs('public/assets/publication',$FileNameToStore);
            $publication->publication_file =   $FileNameToStore;
        }
        $publication->publication_name =   $request->publication_name;
        $publication->publication_date =   $request->publication_date;
        $publication->publication_category_id  =   $request->publication_category_id;
        $publication->status  =   $request->status;
        $publication->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(publication $publication)
    {
        $path = 'storage/assets/publication/';
        $ext_file = $path.$publication->publication_file;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $publication->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
