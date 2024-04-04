<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;

class download extends Controller
{
    public function download(){
        $header = header::find(1);
        $link = link::limit(5)->get();
       
       return view('download', compact(['header','link']));
   
      }
}
