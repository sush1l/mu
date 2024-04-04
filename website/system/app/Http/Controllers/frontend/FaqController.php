<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\faq;

class FaqController extends Controller
{
    public function faq(){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $faq = faq::limit(5)->get();
       return view('faq', compact(['header','link','faq']));
   
      }
}
