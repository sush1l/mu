<?php

namespace App\Http\Controllers;

use App\samiti;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SamitiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return samiti[]|Collection|Response
     */
    public function index()
    {
        $samitis  =   samiti::all();
        return view('user.backend.samiti.samiti_add.samiti_list',compact(['samitis']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        
       $samitis  =   samiti::all();
       return view('user.backend.samiti.samiti_add.samiti',compact(['samitis'
       ]));
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
            'name'  =>  'required',
            'designation'    =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'status'    =>  'required'
        ]);

        //store in db
        $store = new samiti;
        $store->name    =   $request->name;
        $store->designation    =   $request->designation;
        $store->phone    =   $request->phone;
        $store->address    =   $request->address;
        $store->position    =   $request->position;
        $store->status    =   $request->status;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param samiti $samiti
     * @return void
     */
    public function show(samiti $samiti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param samiti $samiti
     * @return samiti
     */
    public function edit(samiti $samiti)
    {
       
        
        return view('user.backend.samiti.samiti_update.samitiedit',compact(['samiti'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param samiti $samiti
     * @return RedirectResponse
     */
    public function update(Request $request, samiti $samiti)
    {
        $request->validate([
            'name'  =>  'required',
            'designation'    =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'status'    =>  'required'
        ]);
        //File Storage
        $path = 'storage/assets/samiti/';
        //store in db
      
        $samiti->name    =   $request->name;
        $samiti->designation    =   $request->designation;
        $samiti->phone    =   $request->phone;
        $samiti->address    =   $request->address;
        $samiti->position    =   $request->position;
        $samiti->status    =   $request->status;
        $samiti->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param samiti $samiti
     * @return RedirectResponse
     */
    public function destroy(samiti $samiti)
    {
        $path = 'storage/assets/samiti/';
       
        $samiti->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
