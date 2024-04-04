<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\notice;
use App\link;
use App\slider;
use App\faq;

use App\office_detail;
use App\employee;
use App\setting_employee;
use App\photo_album;
use App\download;
use App\publication;
use App\dastabej;
class index extends Controller
{
   public function index(){
        $header = header::find(1);
         $notice = notice::limit(5)->orderBy('created_at','desc')->get();
        $link = link::limit(7)->get();
        $slider = slider::get();
        $office_Detail = office_detail::get();
        $employee = employee::get();
        $download = download::limit(7)->get();
        $publication = publication::limit(7)->get();
        $dastabej = dastabej::limit(10)->get();
        $photo_album = photo_album::get();
        $karyalaya_pramukh = setting_employee::find(1);
        $information_officer = setting_employee::find(2);
       return view('welcome', compact(['header','notice','link','slider','office_Detail','karyalaya_pramukh','information_officer','employee','photo_album','download','publication','dastabej']));
    }
}
