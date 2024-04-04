<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\dastabej;
use App\notice;
use App\social_region;
use App\publication;
use App\download;
use App\photo_album;
use App\infrastructure;
use App\slider;
use App\bill;
use App\directorate;
use App\link;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees  =   employee::all()->count();
        $dastabejs = dastabej::all()->count();
         $notice = notice::all()->count();
         $social_region = social_region::all()->count();
         $publications = publication::all()->count();
          $download = download::all()->count();
          $photo_album = photo_album::all()->count();
          $infrastructure = infrastructure::all()->count();
          $sliders = slider::all()->count();
          $bill  =   bill::all()->count();
        $directorates = directorate::all()->count();
        $links = link::all()->count();


        return view('home',compact(['employees','dastabejs','notice','social_region','publications','download','photo_album','infrastructure','sliders','bill','directorates','links'

        ]));
    }
}
