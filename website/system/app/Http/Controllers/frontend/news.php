<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\notice;
class news extends Controller
{
    public function news(){
        $header = header::find(1);
        $link = link::limit(5)->get();
       $notice = notice::orderBy('created_at','desc')->get();
        
       return view('news', compact(['header','link','notice']));
   
      }
}
