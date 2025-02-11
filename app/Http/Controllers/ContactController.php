<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Message as ModelMessage;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEnquiry(Request $request){
        $data = $request->validate([
            'name' => 'required | min:3',
            'phone' => 'required | regex:/^[0-9]+$/',
            'email' => 'required | email',
            'subject' => 'required | min:1',
            'messageContent' => 'required | min:5'
        ]);
        // dd('ok');
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
        // dd('mail sent');
        ModelMessage::create($data);

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
