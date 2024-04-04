<?php

namespace App\Http\Controllers;

use App\dastabej_category;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DastabejCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return dastabej_category[]|Collection|Response
     */
    public function index()
    {
        $dastabej_categories = dastabej_category::all();
       return view('user.backend.kanuni_dastabaj.category.kanuni_category',compact(['dastabej_categories'])) ;
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
            'dastabej_category_name'    =>  'required'
        ]);
        $store  =   new dastabej_category;
        $store->dastabej_category_name  =   $request->dastabej_category_name;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param dastabej_category $dastabej_category
     * @return void
     */
    public function show(dastabej_category $dastabej_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param dastabej_category $dastabej_category
     * @return dastabej_category
     */
    public function edit(dastabej_category $dastabej_category)
    {
        return  view('user.backend.kanuni_dastabaj.update.kanuni_category_update',compact(['dastabej_category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param dastabej_category $dastabej_category
     * @return RedirectResponse
     */
    public function update(Request $request, dastabej_category $dastabej_category)
    {
        $request->validate([
            'dastabej_category_name'    =>  'required'
        ]);
        $dastabej_category->dastabej_category_name  =   $request->dastabej_category_name;
        $dastabej_category->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param dastabej_category $dastabej_category
     * @return RedirectResponse
     */
    public function destroy(dastabej_category $dastabej_category)
    {
        $dastabej_category->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
