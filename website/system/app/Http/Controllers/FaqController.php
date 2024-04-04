<?php

namespace App\Http\Controllers;

use App\faq;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return faq[]|Collection|Response
     */
    public function index()
    {
        $faq   =   faq::all();
        return view('user.backend.frequently.faq',compact(['faq']));
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
            'question'  =>  'required',
            'answer'    =>  'required'
        ]);
        $store =    new faq;
        $store->question    =   $request->question;
        $store->answer  =   $request->answer;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param faq $faq
     * @return void
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param faq $faq
     * @return faq
     */
    public function edit(faq $faq)
    {
        return view('user.backend.frequently.faqedit',compact(['faq']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param faq $faq
     * @return RedirectResponse
     */
    public function update(Request $request, faq $faq)
    {
        $request->validate([
            'question'  =>  'required',
            'answer'    =>  'required'
        ]);
        $faq->question    =   $request->question;
        $faq->answer  =   $request->answer;
        $faq->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param faq $faq
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(faq $faq)
    {
        $faq->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
