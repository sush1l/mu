<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\bill;
class billcontroller extends Controller
{
    public function bill(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $bill = bill::get();
       return view('bill', compact(['header','link','bill']));
   
      }
}
