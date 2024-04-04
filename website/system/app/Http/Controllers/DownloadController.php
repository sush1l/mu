<?php

namespace App\Http\Controllers;

use App\download;
use App\download_category;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return download[]|Collection|Response
     */
    public function index()
    {
        $download = download::all();
        return view('user.backend.download.downloads.download_list',compact(['download']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $download_categories = download_category::all();
        return view('user.backend.download.downloads.download',compact(['download_categories']));
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
            'download_title' => 'required',
            'file'  =>  'required | mimes:pdf,png,jpg,jpeg,zip',
            'download_date' =>  'required',
            'download_category_id' =>   'required'
        ]);
        $OriginalFileName = $request->file('file')->getClientOriginalName();
        $ext = $request->FILE('file')->getClientOriginalExtension();
        $FileNameToStore = 'download'.time().'.'.$ext;
        $request->file('file')->storeAs('public/assets/download',$FileNameToStore);
        $store = new download;
        $store->download_title  =   $request->download_title;
        $store->file    =  $FileNameToStore;
        $store->download_date   =   $request->download_date;
        $store->download_category_id    =   $request->download_category_id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param download $download
     * @return void
     */
    public function show(download $download)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param download $download
     * @return download
     */
    public function edit(download $download)
    {
        $download_categories = download_category::all();
        return view('user.backend.download.update.download_update',compact(['download_categories','download']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param download $download
     * @return RedirectResponse
     */
    public function update(Request $request, download $download)
    {
        $request->validate([
            'download_title' => 'required',
            'file'  =>  'nullable | mimes:pdf,png,jpg,jpeg,zip',
            'download_date' =>  'required',
            'download_category_id' =>   'required'
        ]);
        $path = 'storage/assets/download/';

        $download->download_title  =   $request->download_title;
        if ($request->hasFile('file')) {
            $ext_file = $path.$download->file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('file')->getClientOriginalExtension();
            $FileNameToStore = 'download' . time() . '.' . $ext;
            $request->file('file')->storeAs('public/assets/download', $FileNameToStore);
            $download->file    =   $FileNameToStore;
        }

        $download->download_date   =   $request->download_date;
        $download->download_category_id    =   $request->download_category_id;
        $download->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param download $download
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(download $download)
    {
        $path = 'storage/assets/download/';
        $ext_file = $path.$download->file;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $download->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
