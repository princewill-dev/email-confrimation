<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CodeController extends Controller
{

    public function verify_page_function()
    {
        return view('inner.verify');
    }


    function generate_activity_id($length = 10)
    {
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

    
    public function generate_otp_code($length = 5)
    {
        // $otp_code = Str::random($length);

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

    
    public function verify_email_function(Request $request)
    {
        $validate_email = $request->validate([
            'email' => 'required|email',
        ]);

        $activity_id = Str::random(20);

        $send_otp = new Code;
        $send_otp->email = $validate_email['email'];
        $send_otp->activity_id = $activity_id;
        // $send_otp->otp_code = strtoupper($this->generate_otp_code());
        $send_otp->otp_code = $this->generate_otp_code();
        $send_otp->save();

        return redirect("confirm")->with('success', 'OTP sent');

    }


    public function confirm_otp_function()
    {
        return view('inner.confirm');
    }

    
}
