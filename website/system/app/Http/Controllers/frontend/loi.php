<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\notice;
class loi extends Controller
{
    public function loi(){
        $header = header::find(1);
        $link = link::limit(5)->get();
       $notice = notice::orderBy('created_at','desc')->get();
        
       return view('loi', compact(['header','link','notice']));
   
      }
}
