<?php

namespace App\Http\Controllers;

use App\publication_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publication_categories = publication_category::all();
        return view('user.backend.publication.category.publication_category',compact(['publication_categories']));
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
            'publication_category_name'  =>  'required'
        ]);
        $store = new publication_category;
        $store->publication_category_name    =   $request->publication_category_name;
        $store->save();
        session()->flash('status', 'Data saved successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publication_category  $publication_category
     * @return \Illuminate\Http\Response
     */
    public function show(publication_category $publication_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publication_category  $publication_category
     * @return \Illuminate\Http\Response
     */
    public function edit(publication_category $publication_category)
    {
        return view('user.backend.publication.update.publication_category_update',compact(['publication_category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publication_category  $publication_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publication_category $publication_category)
    {
        $request->validate([
            'publication_category_name'  =>  'required'
        ]);
        $publication_category->publication_category_name    =   $request->publication_category_name;
        $publication_category->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publication_category  $publication_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(publication_category $publication_category)
    {
        $publication_category->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
