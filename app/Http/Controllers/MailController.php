<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    // function sendEmail(){
    //     $to="shikha1016singh@gmail.com",
    //     $msg=""
    // }
    // public function sendEmail(Request $request)
    // {
    //     $to = "shikha1016singh@gmail.com";

    //     $msg = "New Popup Lead:\n"
    //          . "Name: " . $request->name . "\n"
    //          . "Mobile: " . $request->mobile . "\n"
    //          . "Pincode: " . $request->pincode;

    //     Mail::raw($msg, function($message) use ($to) {
    //         $message->to($to)
    //                 ->subject("New Popup Lead");
    //     });

    //     return response()->json(['status' => 'success']);
    // }
      public function sendEmail(Request $request)
    {
        $to = "shikha1016singh@gmail.com";

        $msg = "New Popup Lead:\n"
             . "Name: " . $request->name . "\n"
             . "Mobile: " . $request->mobile . "\n"
             . "Pincode: " . $request->pincode . "\n"
             . "Pincode: " . $request->pincode .  "\n"
             . "Pincode: " . $request->pincode;

        Mail::raw($msg, function($message) use ($to) {
            $message->to($to)
                    ->subject("Reqirement");
        });

        return response()->json(['status' => 'success']);
    }
}
