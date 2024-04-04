<?php

namespace App\Http\Controllers;
use App\dastabej;
use App\dastabej_category;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DastabejController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return dastabej[]|Collection|Response
     */
    public function index()
    {
        $dastabejs = dastabej::all();
        return view('user.backend.kanuni_dastabaj.kanuni.kanini_list',compact(['dastabejs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
         $dastabej_categorie = dastabej_category::all();
        return view('user.backend.kanuni_dastabaj.kanuni.kanuni',compact(['dastabej_categorie',]));
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
            'dastabej_title' => 'required',
            'file'  =>  'required | mimes:pdf,png,jpg,jpeg,zip',
            'dastabej_date' =>  'required ',
            'dastabej_category_id' =>   'required'
        ]);
        $OriginalFileName = $request->file('file')->getClientOriginalName();
        $ext = $request->FILE('file')->getClientOriginalExtension();
        $FileNameToStore = 'dastabej'.time().'.'.$ext;
        $request->file('file')->storeAs('public/assets/dastabej',$FileNameToStore);
        $store = new dastabej;
        $store->dastabej_title  =   $request->dastabej_title;
        $store->file    =  $FileNameToStore;
        $store->dastabej_date   =   $request->dastabej_date;
        $store->dastabej_category_id    =   $request->dastabej_category_id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param dastabej $dastabej
     * @return void
     */
    public function show(dastabej $dastabej)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param dastabej $dastabej
     * @return dastabej
     */
    public function edit(dastabej $dastabej)
    {
        $dastabej_categorie = dastabej_category::all();
        return view('user.backend.kanuni_dastabaj.update.kanuni_update',compact(['dastabej_categorie','dastabej']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param dastabej $dastabej
     * @return RedirectResponse
     */
    public function update(Request $request, dastabej $dastabej)
    {
        $request->validate([
            'dastabej_title' => 'required',
            'file'  =>  'nullable | mimes:pdf,png,jpg,jpeg,zip',
            'dastabej_date' =>  'required',
            'dastabej_category_id' =>   'required'
        ]);
        $path = 'storage/assets/dastabej/';

        $dastabej->dastabej_title  =   $request->dastabej_title;
        if ($request->hasFile('file')) {
            $ext_file = $path.$dastabej->file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('file')->getClientOriginalExtension();
            $FileNameToStore = 'dastabej' . time() . '.' . $ext;
            $request->file('file')->storeAs('public/assets/dastabej', $FileNameToStore);
            $dastabej->file    =   $FileNameToStore;
        }

        $dastabej->dastabej_date   =   $request->dastabej_date;
        $dastabej->dastabej_category_id    =   $request->dastabej_category_id;
        $dastabej->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param dastabej $dastabej
     * @return RedirectResponse
     */
    public function destroy(dastabej $dastabej)
    {
        $path = 'storage/assets/dastabej/';
            $ext_file = $path.$dastabej->file;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $dastabej->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
