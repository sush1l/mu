<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\header;
use App\link;
use App\download;
class downloadcontroller extends Controller
{
    public function download(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $download = download::get();
       return view('download', compact(['header','link','download']));
   
      }
}
