<?php

namespace App\Http\Controllers;

use App\social_region_category;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SocialRegionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return social_region_category[]|Collection
     */
    public function index()
    {
        $social_region_categories = social_region_category::all();
        return view('user.backend.social_region.category.social_area_category',compact(['social_region_categories'])) ;
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
            'social_region_category_name'    =>  'required'
        ]);
        $store  =   new social_region_category();
        $store->social_region_category_name  =   $request->social_region_category_name;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param social_region_category $social_region_category
     * @return void
     */
    public function show(social_region_category $social_region_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param social_region_category $social_region_category
     * @return social_region_category
     */
    public function edit(social_region_category $social_region_category)
    {
        return view('user.backend.social_region.update.social_region_category_update',compact(['social_region_category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param social_region_category $social_region_category
     * @return RedirectResponse
     */
    public function update(Request $request, social_region_category $social_region_category)
    {
        $request->validate([
            'social_region_category_name'    =>  'required'
        ]);
        $social_region_category->social_region_category_name  =   $request->social_region_category_name;
        $social_region_category->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param social_region_category $social_region_category
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(social_region_category $social_region_category)
    {
        $social_region_category->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
