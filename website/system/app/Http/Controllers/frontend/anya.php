<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\notice;
class anya extends Controller
{
    public function anya(){
        $header = header::find(1);
        $link = link::limit(5)->get();
       $notice = notice::orderBy('created_at','desc')->get();
        
       return view('anya', compact(['header','link','notice']));
   
      }
}
