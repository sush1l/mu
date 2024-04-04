<?php

namespace App\Http\Controllers;

use App\notice_category;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NoticeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return notice_category[]|Collection|Response
     */
    public function index()
    {
        $notice_categories = notice_category::all();
        return $notice_categories;
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
            'notice_category_name'  =>  'required'
        ]);
        $store = new notice_category;
        $store->notice_category_name    =   $request->notice_category_name;
        $store->save();
        session()->flash('status', 'Data saved successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param notice_category $notice_category
     * @return void
     */
    public function show(notice_category $notice_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param notice_category $notice_category
     * @return notice_category
     */
    public function edit(notice_category $notice_category)
    {
        return $notice_category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param notice_category $notice_category
     * @return RedirectResponse
     */
    public function update(Request $request, notice_category $notice_category)
    {
        $request->validate([
            'notice_category_name'  =>  'required'
        ]);
        $notice_category->notice_category_name    =   $request->notice_category_name;
        $notice_category->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param notice_category $notice_category
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(notice_category $notice_category)
    {
        $notice_category->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
