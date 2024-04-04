<?php

namespace App\Channels;

use App\User;
use GuzzleHttp;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Cache;

class AakaskSMS
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * The callback that should be used to create the reset password URL.
     *
     * @var \Closure|null
     */
    public static $createUrlCallback;


    private $endpoint = 'https://aakashsms.com/admin/public/sms/v1/send';

    public function send($notifiable, Notification $notification)
    {

        $client = new GuzzleHttp\Client();
        $response = $client->request('POST', $this->endpoint, [
            'form_params' => [
                'auth_token' => '271fc259a10bc7e4faf422064c7c7d2e0fd9130233b391725e58761d677e6381',
                'to' => $notifiable->phone,
                'text' => 'Your Otp is '.Cache::get('otp').'. Please verify this otp',
            ],
        ]);

        // If the request failed
        if($response->getStatusCode() !== 200){
            // Log the error or something
        }
    }
}
