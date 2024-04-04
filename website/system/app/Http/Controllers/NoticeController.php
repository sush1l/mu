<?php

namespace App\Http\Controllers;

use App\notice;
use App\notice_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = notice::all();
        return view('user.backend.notice.index',compact(['notice']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notice_categories = notice_category::all();
        return view('user.backend.notice.create',compact(['notice_categories']));
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
            'notice_name'   =>  'required',
            'notice_file'   =>  'required   |   mimes:pdf,png,jpeg,jpg',
            'notice_publisher'  =>  'nullable',
            'notice_date'   =>  'required   |   date',
            'notice_description'    =>  'nullable',
            'notice_category_id'    =>  'required',
            'status'    =>  'required',
            'mark_as_new'   =>  'required',
        ]);
        $ext = $request->FILE('notice_file')->getClientOriginalExtension();
        $FileNameToStore = 'notice_file'.time().'.'.$ext;
        $request->file('notice_file')->storeAs('public/assets/notice',$FileNameToStore);

        $store  =   new notice;
        $store->notice_name =   $request->notice_name;
        $store->notice_file =   $FileNameToStore;
        $store->notice_publisher    =   $request->notice_publisher;
        $store->notice_date =   $request->notice_date;
        $store->notice_description  =   $request->notice_description;
        $store->notice_category_id  =   $request->notice_category_id;
        $store->status  =   $request->status;
        $store->mark_as_new =   $request->mark_as_new;
        $store->save();
       session()->flash('status', 'Data stored successfully!');
        return redirect(route('SMS',$store));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        $notice_categories = notice_category::all();
        return view('user.backend.notice.noticeedit',compact(['notice','notice_categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, notice $notice)
    {
        $request->validate([
            'notice_name'   =>  'required',
            'notice_file'   =>  'required   |   mimes:pdf,png,jpeg,jpg',
            'notice_publisher'  =>  'nullable',
            'notice_date'   =>  'required   |   date',
            'notice_description'    =>  'nullable',
            'notice_category_id'    =>  'required',
            'status'    =>  'required',
            'mark_as_new'   =>  'required',
        ]);


        $path = 'storage/assets/photo/';
        if ($request->hasFile('notice_file')) {
            $ext_file = $path.$notice->notice_file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('notice_file')->getClientOriginalExtension();
            $FileNameToStore = 'notice_file'.time().'.'.$ext;
            $request->file('notice_file')->storeAs('public/assets/notice',$FileNameToStore);
            $notice->notice_file =   $FileNameToStore;
        }
        $notice->notice_name =   $request->notice_name;

        $notice->notice_publisher    =   $request->notice_publisher;
        $notice->notice_date =   $request->notice_date;
        $notice->notice_description  =   $request->notice_description;
        $notice->notice_category_id  =   $request->notice_category_id;
        $notice->status  =   $request->status;
        $notice->mark_as_new =   $request->mark_as_new;
        $notice->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect(route('SMS',$store));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
        $path = 'storage/assets/notice/';
        $ext_file = $path.$notice->notice_file;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $notice->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
