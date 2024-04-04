<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(User $user){
    return view('admin.password.change', compact(['user']));
    }

    public function store(Request $request, User $user){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
        $update = User::find(auth()->user()->id);
        $update->password = Hash::make($request->new_password);
        $update->save();
        return redirect()->back();
    }
}
