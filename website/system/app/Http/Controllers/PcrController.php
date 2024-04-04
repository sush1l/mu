<?php

namespace App\Http\Controllers;

use App\pcr;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $pcr =   pcr::sum('pcr');
        $isolation  =   pcr::sum('isolation');
        $quarantine  =   pcr::sum('quarantine');
        $last24pcr = pcr::where('uploaded_date',Carbon::yesterday())->sum('pcr');
        $last24isolation = pcr::where('uploaded_date',Carbon::yesterday())->sum('isolation');
        $last24quarantine = pcr::where('uploaded_date',Carbon::yesterday())->sum('quarantine');
        return view('pcr.index', compact(['pcr','isolation','quarantine','last24pcr','last24isolation','last24quarantine']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('pcr.insert');
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
            'pcr' =>  'required',
            'isolation'    =>  'required',
            'quarantine'    =>  'required',
            'updated_date'    =>  'required | date',
        ]);
        $store  =   new pcr;
        $store->uploaded_date        =   $request->updated_date;
        $store->pcr       =   $request->pcr;
        $store->isolation      =   $request->isolation;
        $store->quarantine      =   $request->quarantine;
        $store->user_id     =   Auth::user()->id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param pcr $pcr
     * @return void
     */
    public function show(pcr $pcr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param pcr $pcr
     * @return pcr
     */
    public function edit(pcr $pcr)
    {
        return $pcr;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param pcr $pcr
     * @return RedirectResponse
     */
    public function update(Request $request, pcr $pcr)
    {
        $request->validate([
            'pcr' =>  'required',
            'isolation'    =>  'required',
            'quarantine'    =>  'required',
        ]);

        $pcr->pcr       =   $request->pcr;
        $pcr->isolation      =   $request->isolation;
        $pcr->quarantine      =   $request->quarantine;
        $pcr->save();
        session()->flash('status', 'Data Updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param pcr $pcr
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(pcr $pcr)
    {
        $pcr->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
