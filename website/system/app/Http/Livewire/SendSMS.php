<?php

namespace App\Http\Livewire;

use App\Contact;
use App\ContactGroup;
use App\SmsDetail;
use Livewire\Component;

class SendSMS extends Component
{
    public $notice_send = [];
    public $groups = [];
    public $contacts = [];
    public $shifter = 0;
    public $to;
    public $group_receipts = [];
    public $contact_receipts = [];
    public $message;
    public function mount($notice)
    {
        $this->notice_send = $notice;
        $this->groups = ContactGroup::latest()->get();
        $this->contacts = Contact::latest()->get();
        $this->message = "Dear Sir/Maam, ".
            env('APP_NAME')." has posted ".$this->notice_send->notice_name.".for more information please visit ".route('notice.show',$this->notice_send->id)."";
    }

    public function shift($shift)
    {
       $this->shifter   =   $shift;

    }

    public function send()
    {

        if ($this->shifter == 0){
            $myArray = explode(',', $this->to);
            foreach ($myArray as $sms){
                $args = http_build_query(array(
                    'auth_token'=> '271fc259a10bc7e4faf422064c7c7d2e0fd9130233b391725e58761d677e6381',
                    'to'    => $sms,
                    'text'  => $this->message));
                $url = "http://aakashsms.com/admin/public/sms/v3/send/";

                # Make the call using API.
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1); ///
                curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                // Response
                $response = curl_exec($ch);
                curl_close($ch);
                $this->notice_send ->sms()->create([
                    'to'    =>  $sms,
                    'message'   =>  $this->message,

                ]);
            }
        }
        elseif ($this->shifter == 1){
            foreach ($this->group_receipts as $groups){
                $sender = ContactGroup::find($groups);
                foreach ($sender->Contact as $contact){
                    $args = http_build_query(array(
                        'auth_token'=> '271fc259a10bc7e4faf422064c7c7d2e0fd9130233b391725e58761d677e6381',
                        'to'    => $contact->phone,
                        'text'  => $this->message));
                    $url = "http://aakashsms.com/admin/public/sms/v3/send/";

                    # Make the call using API.
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, 1); ///
                    curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    // Response
                    $response = curl_exec($ch);
                    curl_close($ch);
                    $this->notice_send ->sms()->create([
                        'to'    =>  $contact->phone,
                        'message'   =>  $this->message,
                    ]);
                }
            }
        }else{
            foreach($this->contact_receipts as $contact){
                $args = http_build_query(array(
                    'auth_token'=> '271fc259a10bc7e4faf422064c7c7d2e0fd9130233b391725e58761d677e6381',
                    'to'    => $contact,
                    'text'  => $this->message));
                $url = "http://aakashsms.com/admin/public/sms/v3/send/";

                # Make the call using API.
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1); ///
                curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                // Response
                $response = curl_exec($ch);
                curl_close($ch);
                $this->notice_send ->sms()->create([
                    'to'    =>  $contact,
                    'message'   =>  $this->message,
                ]);
            }
        }
        return redirect(route('notice.index'));
    }
    public function render()
    {
        return view('livewire.send-s-m-s');
    }
}
