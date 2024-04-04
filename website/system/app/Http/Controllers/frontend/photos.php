<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\header;
use App\link;
use App\photo;
use App\photo_album;
class photos extends Controller
{
    public function photos($language,$id){
        $header = header::find(1);
        $link = link::limit(5)->get();
        $photo_album = photo_album::find($id);
        $photos = photo::where('photo_album_id', $id)->get();
       return view('photo', compact(['header','link','photo_album','photos']));
   
      }
}
