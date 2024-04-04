<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\covid19;
use App\Http\Resources\covid19Resource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class covid19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return covid19Resource
     */
    public function index()
    {
        $data = [
            'newcases'  =>   covid19::sum('new_cases'),
            'deaths'  =>   covid19::sum('deaths'),
            'healed'  =>   covid19::sum('healed'),
            'last24cases' => covid19::where('updated_date',Carbon::yesterday())->sum('new_cases'),
            'last24deaths' => covid19::where('updated_date',Carbon::yesterday())->sum('deaths'),
            'last24healed' => covid19::where('updated_date',Carbon::yesterday())->sum('healed'),
            'totalInfected' =>  (covid19::sum('new_cases'))-(( covid19::sum('deaths'))-(covid19::sum('healed'))),
            'Covid19Report' =>  route('export')
        ];
        return new covid19Resource($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function show(covid19 $covid19)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function edit(covid19 $covid19)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, covid19 $covid19)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function destroy(covid19 $covid19)
    {
        //
    }
}
