<?php

namespace App\Http\Controllers;

use App\directorate;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DirectorateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return directorate[]|Collection|Response
     */
    public function index()
    {
        $directorates = directorate::all();
        return view('user.backend.directrotes.directrote',compact(['directorates']));
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
            'directorate_name'  =>  'required',
            'directorate_phone' =>  'nullable | numeric | min:8',
            'directorate_email' =>  'nullable | email',
            'directorate_website'   =>  'nullable | url',
        ]);
        $store = new directorate;
        $store->directorate_name    =   $request->directorate_name;
        $store->directorate_phone   =   $request->directorate_phone;
        $store->directorate_email   =   $request->directorate_email;
        $store->directorate_website =   $request->directorate_website;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param directorate $directorate
     * @return void
     */
    public function show(directorate $directorate)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param directorate $directorate
     * @return directorate
     */
    public function edit(directorate $directorate)
    {
        return view('user.backend.directrotes.directroteedit',compact(['directorate']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param directorate $directorate
     * @return RedirectResponse
     */
    public function update(Request $request, directorate $directorate)
    {
        $request->validate([
            'directorate_name'  =>  'required',
            'directorate_phone' =>  'nullable | numeric | min:8',
            'directorate_email' =>  'nullable | email',
            'directorate_website'   =>  'nullable | url',
        ]);

        $directorate->directorate_name    =   $request->directorate_name;
        $directorate->directorate_phone   =   $request->directorate_phone;
        $directorate->directorate_email   =   $request->directorate_email;
        $directorate->directorate_website =   $request->directorate_website;
        $directorate->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param directorate $directorate
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(directorate $directorate)
    {
        $directorate->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
