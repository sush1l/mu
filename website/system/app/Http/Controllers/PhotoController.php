<?php

namespace App\Http\Controllers;
use App\photo_album;
use App\photo;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return photo[]|Collection|Response
     */
    public function index()
    {
        $photos = photo::all();
        $photo_albums = photo_album::all();
        return view('user.backend.photo.photo.photo',compact(['photos','photo_albums'])) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo_title'    =>  'nullable',
            'photo_album_id'    =>  'required',
            'photo'   =>  'required | mimes:jpg,jpeg,png'
        ]);
        $store  =   new photo;
        $store->photo_title  =   $request->photo_title;
        $store->photo_album_id  =   $request->photo_album_id;
        $ext = $request->FILE('photo')->getClientOriginalExtension();
        $FileNameToStore = 'photo'.time().'.'.$ext;
        $request->file('photo')->storeAs('public/assets/photo',$FileNameToStore);
        $store->photo =  $FileNameToStore;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param photo $photo
     * @return void
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param photo $photo
     * @return photo
     */
    public function edit(photo $photo)
    {
        $photo_albums = photo_album::all();
        return view('user.backend.photo.photo.photoedit',compact(['photo','photo_albums'])) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param photo $photo
     * @return RedirectResponse
     */
    public function update(Request $request, photo $photo)
    {
        $request->validate([
            'photo_title'    =>  'nullable',
            'photo_album_id'    =>  'required',
            'photo'   =>  'nullable | mimes:jpg,jpeg,png'
        ]);
        $path = 'storage/assets/photo/';
        $photo->photo_title  =   $request->photo_title;
        if ($request->hasFile('cover_photo')) {
            $ext_file = $path.$photo->photo;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('photo')->getClientOriginalExtension();
            $FileNameToStore = 'photo'.time().'.'.$ext;
            $request->file('photo')->storeAs('public/assets/photo',$FileNameToStore);
            $photo->photo =  $FileNameToStore;
        }
        $photo->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param photo $photo
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(photo $photo)
    {
        $path = 'storage/assets/photo/';
        $ext_file = $path.$photo->photo;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $photo->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
