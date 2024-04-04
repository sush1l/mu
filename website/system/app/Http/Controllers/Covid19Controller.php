<?php

namespace App\Http\Controllers;

use App\covid19;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Covid19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array|Application|Factory|View
     */
    public function index()
    {
        $new_cases  =   covid19::sum('new_cases');
        $deaths  =   covid19::sum('deaths');
        $healed  =   covid19::sum('healed');
        $last24cases = covid19::where('updated_date',Carbon::yesterday())->sum('new_cases');
        $last24deaths = covid19::where('updated_date',Carbon::yesterday())->sum('deaths');
        $last24healed = covid19::where('updated_date',Carbon::yesterday())->sum('healed');
        return view('covid19.index', compact(['new_cases','deaths','healed','last24cases','last24deaths','last24healed']));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('covid19.insert');
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
            'new_cases' =>  'required',
            'deaths'    =>  'required',
            'healed'    =>  'required',
            'updated_date'    =>  'required | date',
        ]);
        $store  =   new covid19;
        $store->updated_date        =   $request->updated_date;
        $store->new_cases       =   $request->new_cases;
        $store->healed      =   $request->healed;
        $store->deaths      =   $request->deaths;
        $store->user_id     =   Auth::user()->id;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param covid19 $covid19
     * @return void
     */
    public function show(covid19 $covid19)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param covid19 $covid19
     * @return covid19
     */
    public function edit(covid19 $covid19)
    {
        return $covid19;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param covid19 $covid19
     * @return RedirectResponse
     */
    public function update(Request $request, covid19 $covid19)
    {
        $request->validate([
            'new_cases' =>  'required',
            'deaths'    =>  'required',
            'healed'    =>  'required'
        ]);
        $covid19->new_cases       =   $request->new_cases;
        $covid19->healed      =   $request->healed;
        $covid19->deaths      =   $request->deaths;
        $covid19->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param covid19 $covid19
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(covid19 $covid19)
    {
        $covid19->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
