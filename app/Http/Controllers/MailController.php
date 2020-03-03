<?php

namespace App\Http\Controllers;

use App\DatkaiSetting;
use App\Mail\CallBack;
use App\Mail\NewAppointmentNotificationForAdmin;
use App\Mail\SendPrice;
use App\Product;
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

        $settings = DatkaiSetting::orderBy('created_at','desc')->first();

        $product = Product::find($request->id);
        if(isset($product)){
            Mail::to($settings->email)->send(new SendPrice([$name,$phone,$email,$product->name]));
        }else{
            Mail::to($settings->email)->send(new CallBack([$name,$phone,$email]));
        }
        return response()->json([
            'status' => "success",
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
        ]);
    }
}
