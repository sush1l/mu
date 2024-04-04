<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(User $user){
        return view('admin.users.profile.edit', compact(['user']));
    }
    public function update(Request $request, User $user){
        $request->validate([
            'name'  =>  'nullable',
            'email' =>  'nullable | email',
            'phone' =>  'nullable | numeric | min:8',
        ]);
        $update = User::find(auth()->user()->id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->save();
        return redirect()->back();
    }
}
