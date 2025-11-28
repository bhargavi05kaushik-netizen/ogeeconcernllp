<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class PopupController extends Controller
{
     public function send(Request $request)
    {
        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'pincode' => $request->pincode,
            'address' => $request->address,
            'requirement' => $request->requirement,
        ];

        Mail::raw(
            "New Popup Form Submission:\nName: {$data['name']}\nMobile: {$data['mobile']}\nPincode: {$data['pincode']}\nAddress: {$data['address']}\nRequirement: {$data['requirement']}",
            function ($message) {
                $message->to('shikha1016singh@gmail.com')
                        ->subject('Popup Form Data');
            }
        );

        return response()->json(['success' => true]);
    }
}
