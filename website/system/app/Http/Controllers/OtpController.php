<?php

namespace App\Http\Controllers;

use App\Notifications\MailTest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class OtpController extends Controller
{
    public function check(Request $request){
        $request->validate([
            'phone' => 'required | numeric',
        ]);
        $user = User::where('phone',$request->phone);
        $count = $user->count();

        if ($count == 0 ){

            session()->flash('error', 'Sorry the phone no did not match in our record!');
            return redirect()->back();
        }else{
            $data = $user->first();
            $random = mt_rand(1111,9999);
            Cache::put('otp', $random, now()->addMinutes(5));
            $data->notify(new MailTest());

            session()->flash('status', 'Please check your phone for the otp.');
            return redirect(route('password.reset.otp.form', $data->id));
        }
    }
    public function valid(User $user){
        return view('admin.password.otp.validate',compact(['user']));
    }
    public function verify(Request $request, User $user){
           $request->validate([
               'otp'    =>  'required'
           ]);
           if (Cache::get('otp') == $request->otp){
               session()->flash('status', 'Thank you for verifying your otp');
               return redirect(route('password.reset.changes', $user->id));
           }else{
               session()->flash('error', 'Sorry The provided otp did not matched!');
               return redirect()->back();
           }
    }
    public function change(User $user){
        return view('admin.password.reset.reset',compact(['user']));
    }
    public function reset(Request $request,User $user){
        $request->validate([
            'phone' =>  'required | numeric',
            'password'  => 'required | confirmed | min:8',
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        Cache::pull('otp');
        session()->flash('status', 'your password is changed');
        return redirect(route('login'));
    }
}
