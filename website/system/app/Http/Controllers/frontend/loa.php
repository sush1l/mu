<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\notice;
class loa extends Controller
{
    public function loa(){
        $header = header::find(1);
        $link = link::limit(5)->get();
       $notice = notice::orderBy('created_at','desc')->get();
        
       return view('loa', compact(['header','link','notice']));
   
      }
}
