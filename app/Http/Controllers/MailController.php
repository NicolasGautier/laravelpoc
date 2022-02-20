<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
          'title' => 'Mail test from recherche 5335',
          'body' => 'This is a second test '
        ];

        Mail::to('recherche5335@gmail.com')->send(new TestMail($details));
        return "Email Sent";
    }
}
