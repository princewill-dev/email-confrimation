<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class CodeController extends Controller
{

    public function showForm() {
        return view('inner.verify');
    }


    public function createOtp(Request $request) {

        $email = $request->input('email');

        $checkEmail = Code::where('email', $email)->first();

        if ($checkEmail) {

            $status = $checkEmail->status;
            $activityId = $checkEmail->activity_id;
            $createdAt = $checkEmail->created_at;
            $otpCode = $checkEmail->otp_code;
            $currentTime = Carbon::now();
            $isWithinTenMinutes = $createdAt->diffInMinutes($currentTime) <= 30;

            if($status == 'verified') {

                return back()->with('success', 'The email you entered is already verified');

            } else {

                if(!$isWithinTenMinutes) {

                    $newOtp = mt_rand(100000, 999999);

                    $checkEmail->update([
                        'otp_code' => $newOtp,
                    ]);

                    $checkEmail->updateTimestamps();

                    // send email
                    // Mail::raw('Hello, your otp verification code is '.$createNewOtp.' ', function ($message) use ($email) {
                    //     $message->to($email)->subject('Greeting');
                    // });
                    
                    Mail::send('emails.otp', ['newOtp' => $newOtp], function ($message) use ($email) {
                        $message->to($email)->subject('Verification code');
                    });

                    return redirect("/otp_sent/activityId=$activityId")->with('success', 'timed out, a new code has been sent to your email');

                } else {

                    return redirect("/otp_sent/activityId=$activityId")->with('success', 'please enter the code sent to your email');

                }

            }

        } else {

            $activityId = Str::random(30);
            
            $newOtp = mt_rand(100000, 999999);

            $saveItems = new Code;
            $saveItems->email = $email;
            $saveItems->activity_id = $activityId;
            $saveItems->otp_code = $newOtp;
            $saveItems->save();
            
            // Mail::send('emails.otp', ['newOtp' => $newOtp], function ($message) use ($email) {
            //             $message->to($email)->subject('Verification code');
            //         });

            return redirect("otp_sent/activityId=$activityId")->with('success', 'verification code sent, please check your email');;

        }
        
    }


    public function checkTimeWithinTenMinutes($timestamp) {

        $currentTime = Carbon::now();
        $isWithinTenMinutes = $timestamp->diffInMinutes($currentTime) <= 10;

        return $isWithinTenMinutes;
    }


    public function displayOtp($activityId) {

        //return view('inner.confirm', compact('activityId'));

        $verify_url = Code::where('activity_id', $activityId)->first();

        

        if($verify_url) {

            $checkVerify = $verify_url->status;

            if($checkVerify == 'verified') {

                return redirect("/verify")->with('error', 'email already verified');

            } else {

                $createdAt = $verify_url->updated_at;
                $isWithinTenMinutes = $this->checkTimeWithinTenMinutes($createdAt);

                if($isWithinTenMinutes) {

                    return view('inner.confirm', compact('activityId'));

                } else {

                    $createNewOtp = mt_rand(100000, 999999);

                    $verify_url->update([
                        'otp_code' => $createNewOtp
                    ]);

                    $verify_url->updateTimestamps();

                    return view('inner.confirm', compact('activityId'));

                }

            }

        } else {
            return redirect("/verify")->with('error', 'invalid link');
        }

    }

    public function checkOtp(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'activityId' => 'required|string',
        ]);
    
        $activityId = $validatedData['activityId'];
        $code = $validatedData['code'];
    
        // $existingCode = Code::where('otp_code', $code)->first();

        $existingCode = Code::where('otp_code', $code)
        ->where('activity_id', $activityId)
        ->first();
    
        if ($existingCode) {
            $existingCode->update(['status' => 'verified']);
    
            return view('inner.success')->with('success', 'email verified');
        } else {
            $checkActivity = Code::where('activity_id', $activityId)->first();
    
            if ($checkActivity) {
                $attemptCounter = $checkActivity->attempts + 1;
    
                $checkActivity->update(['attempts' => $attemptCounter]);
    
                return back()->with('error', 'Incorrect code, please try again');
            } else {
                return back()->with('error', 'Invalid activity ID');
            }
        }
    }
    




    
}
