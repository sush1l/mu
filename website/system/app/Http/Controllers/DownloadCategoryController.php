<?php

namespace App\Http\Controllers;

use App\download_category;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return download_category[]|Collection|Response
     */
    public function index()
    {
         $download_categories = download_category::all();
        return view('user.backend.download.category.download_category',compact(['download_categories']));
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
            'download_category_name'    =>  'required'
        ]);
        $store  =   new download_category;
        $store->download_category_name  =   $request->download_category_name;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param download_category $download_category
     * @return void
     */
    public function show(download_category $download_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param download_category $download_category
     * @return download_category
     */
    public function edit(download_category $download_category)
    {
        return view('user.backend.download.update.download_category_update',compact(['download_category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param download_category $download_category
     * @return RedirectResponse
     */
    public function update(Request $request, download_category $download_category)
    {
        $request->validate([
            'download_category_name'    =>  'required'
        ]);
        $download_category->download_category_name  =   $request->download_category_name;
        $download_category->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param download_category $download_category
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(download_category $download_category)
    {
        $download_category->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
