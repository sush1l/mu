<?php

namespace App\Http\Controllers;

use App\notice;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function SendSms($notice_id)
    {
        $notice = notice::find($notice_id);
        return view('user.backend.notice.SMS.send', compact('notice'));
    }
}
