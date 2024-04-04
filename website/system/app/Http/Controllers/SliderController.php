<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return slider[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function index()
    {
        $sliders = slider::all();
        
        return view('user.backend.slider.slideradd',compact(['sliders']));
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
            'title' => 'nullable',
            'photo' => 'required | mimes:jpg,jpeg,png'
        ]);

        $store = new slider;
        $store->title = $request->title;
        $OriginalFileName = $request->file('photo')->getClientOriginalName();
//extension
        $ext = $request->FILE('photo')->getClientOriginalExtension();
//File to store
        $FileNameToStore = 'Slider' . time() . '.' . $ext;
//moving
        $path = $request->file('photo')->storeAs('public/assets/slider', $FileNameToStore);
        $store->photo = $FileNameToStore;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param slider $slider
     * @return Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param slider $slider
     * @return slider
     */
    public function edit(slider $slider)
    {
        return view('user.backend.slider.slideredit',compact(['slider']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param slider $slider
     * @return RedirectResponse
     */
    public function update(Request $request, slider $slider)
    {
        $request->validate([
            'title' => 'nullable',
            'photo' => 'nullable | mimes:jpg,jpeg,png'
        ]);
        $slider->title = $request->title;
        $path = 'storage/assets/slider/';
        if ($request->hasFile('photo')) {
            $ext_file = $path . $slider->photo;
            if (file_exists(public_path($ext_file))) {
                unlink($ext_file);
            }
            $OriginalFileName = $request->file('photo')->getClientOriginalName();
            $ext = $request->FILE('photo')->getClientOriginalExtension();
            $FileNameToStore = 'Slider' . time() . '.' . $ext;
            $path = $request->file('photo')->storeAs('public/assets/slider', $FileNameToStore);
            $slider->photo = $FileNameToStore;
        }
        $slider->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param slider $slider
     * @return RedirectResponse
     */
    public function destroy(slider $slider)
    {
        $path = 'storage/assets/slider/';
        $ext_file = $path . $slider->photo;
        if (file_exists(public_path($ext_file))) {
            unlink($ext_file);
        }
        $slider->delete();
        session()->flash('status', 'Slider deleted successfully!');
        return redirect()->back();
    }
}
