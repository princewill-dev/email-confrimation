<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CodeController extends Controller
{

    public function verify_page_function() {
        return view('inner.verify');
    }


    function generate_activity_id($length = 30) {  //re-useable function for generating activity ID

        $activity_id = Str::random($length);

        function check_id_uniqueness($activity_id)
        {
            $activity_id_check = Code::where('activity_id', $activity_id)->first();
            return $activity_id_check !== null;
        }
        
        while (check_id_uniqueness($activity_id)) {
            $activity_id = Str::random($length);
        }
        
        return $activity_id;
    }

    
    public function generate_otp_code($length = 5) {  //re-useable function for generating One-Time_code

        $otp_code = sprintf('%06d', mt_rand(0, 999999));

        function check_otp_uniqueness($otp_code)
        {
            $otp_check = Code::where('otp_code', $otp_code)->first();
            return $otp_check !== null;
        }

        while (check_otp_uniqueness($otp_code))
        {
            $otp_code = Str::random($length);
        }
        
        return $otp_code;
    }

    
    // public function verify_email_function(Request $request) {

    //     $check_email_status = Code::where('status', $request->input('email'))->first();

    //     if($check_email_status == 'verified') {
    //         return redirect("/verify")->with('success', 'the email you entered is already verified');
    //     } else {

    //         $validate_email = $request->validate([
    //             'email' => 'required|email',
    //         ]);
    
    //         $activity_id = $this->generate_activity_id();
    
    //         $send_otp = new Code;
    //         $send_otp->email = $validate_email['email'];
    //         $send_otp->activity_id = $activity_id;
    //         $send_otp->otp_code = $this->generate_otp_code();
    //         $send_otp->save();
    
    //         return redirect("confirm/$activity_id")->with('success', 'Code sent, please check your email');

    //     }

    // }


    public function verify_email_function(Request $request) {

        $check_email_status = Code::where('email', $request->input('email'))->first();

        if ($check_email_status && $check_email_status->status == 'verified') {
            return redirect("/verify")->with('success', 'The email you entered is already verified');
        } else {
            $validate_email = $request->validate([
                'email' => 'required|email',
            ]);

            $activity_id = $this->generate_activity_id();
            $send_otp = new Code;
            $send_otp->email = $validate_email['email'];
            $send_otp->activity_id = $activity_id;
            $send_otp->otp_code = $this->generate_otp_code();
            $send_otp->save();

            return redirect("confirm/$activity_id")->with('success', 'Code sent, please check your email');
        }
    }


    public function checkTimeWithinTenMinutes($timestamp) {

        $currentTime = Carbon::now();
        $isWithinTenMinutes = $timestamp->diffInMinutes($currentTime) <= 30;

        return $isWithinTenMinutes;
    }


    public function confirm_otp_function($activity_id) {

        $verify_url = Code::where('activity_id', $activity_id)->first();

        if($verify_url){

            $createdAt = $verify_url->created_at;
            $isWithinTenMinutes = $this->checkTimeWithinTenMinutes($createdAt);

            $check_verification_status = $verify_url->status;

            if($check_verification_status == 'verified') {

                return redirect("/verify")->with('success', 'email already verified');

            } else {

                if($isWithinTenMinutes) {
                    return view("inner.confirm");
                } else {
                    return redirect("/verify")->with('error', 'time limit exceeded, please try again');
                }

            }

        } else {

            return redirect('/confirm')->with('error', 'session expired, please try again');

        }

    }

    public function confirm_email_function(Request $request) {

        $submited_otp_code = $request->input('code');

        $check_existence = Code::where('otp_code', $submited_otp_code)->first();

        if($check_existence) {

            $get_activity_id = $check_existence->activity_id;

            Code::where('activity_id', $get_activity_id)->update(['status' => 'verified']);

            return view('inner.success')->with('success', 'email verified');

        } else {

            return back()->with('error', 'incorrect code, please try again');
        }


    }


    
}
