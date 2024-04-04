<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\notice;
use App\dastabej;
use App\employee;
use App\designation;
use App\department;
use App\publication;
use App\photo_album;
use App\link;
use App\download;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $q= $request->search_word;
        $notice = notice::where('status','=',0)
            ->where(function ($query) use ($q) {
            $query->where('notice_name', 'LIKE' , '%'.$q.'%')
                  ->orWhere('notice_file', 'LIKE', '%'.$q.'%')
                ->orWhere('notice_publisher', 'LIKE', '%'.$q.'%')
                ->orWhere('notice_description', 'LIKE', '%'.$q.'%');
        })->get();
        $dastabej = dastabej::where(function ($query) use ($q) {
        $query->where('dastabej_title', 'LIKE' , '%'.$q.'%')
              ->orWhere('file', 'LIKE', '%'.$q.'%')
            ->orWhere('dastabej_date', 'LIKE', '%'.$q.'%')
            ->orWhere('dastabej_category_id', 'LIKE', '%'.$q.'%');
    })->get();
    $publication = publication::where('status','=',0)
        ->where(function ($query) use ($q) {
        $query->where('publication_name', 'LIKE' , '%'.$q.'%')
              ->orWhere('publication_file', 'LIKE', '%'.$q.'%')
            ->orWhere('publication_category_id', 'LIKE', '%'.$q.'%');
    })->get();
    $photo_album = photo_album::where(function ($query) use ($q) {
    $query->where('	album_name', 'LIKE' , '%'.$q.'%')
          ->orWhere('cover_photo', 'LIKE', '%'.$q.'%');
        
})->get();
$download = download::where('status','=',0)
->where(function ($query) use ($q) {
$query->where('download_title', 'LIKE' , '%'.$q.'%')
      ->orWhere('file', 'LIKE', '%'.$q.'%')
    ->orWhere('	download_category_id', 'LIKE', '%'.$q.'%');
})->get();
$link = link::where(function ($query) use ($q) {
  $query->where('	link_name', 'LIKE' , '%'.$q.'%')
        ->orWhere('url', 'LIKE', '%'.$q.'%');
      
})->get();
$employee = employee::where('status','=',0)
->where(function ($query) use ($q) {
  $query->where('name', 'LIKE' , '%'.$q.'%')
        ->orWhere('photo', 'LIKE', '%'.$q.'%')
        ->orWhere('department_id ', 'LIKE', '%'.$q.'%')
        ->orWhere('designation_id ', 'LIKE', '%'.$q.'%')
        ->orWhere('phone', 'LIKE', '%'.$q.'%')
        ->orWhere('email', 'LIKE', '%'.$q.'%')
        ->orWhere('address', 'LIKE', '%'.$q.'%')
        ->orWhere('position', 'LIKE', '%'.$q.'%');
      
})->get();
dd($photo_album,$publication,$dastabej,$notice,$download,$link,$employee);
    }
}
