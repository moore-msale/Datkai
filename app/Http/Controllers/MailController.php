<?php

namespace App\Http\Controllers;

use App\Mail\NewAppointmentNotificationForAdmin;
use App\Mail\SendPrice;
use App\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendPrice(Request $request){

        $name = $request->name;

        $phone = $request->phone;

        $email = $request->email;

        Mail::to('kaarov8@gmail.com')->send(new SendPrice([$name,$phone,$email]));

        return response()->json([
            'status' => "success",
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
        ]);
    }
}
