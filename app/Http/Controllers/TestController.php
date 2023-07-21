<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function create(){
        return view('enterCode.enterCode');
    }
    public function sendEmail(Request $request)
    {
            $email = $request->input('email');
            $code = mt_rand(100000, 999999); 

       
            $mail = new PHPMailer(true);
        try {
           
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mgrigoriann@gmail.com';
            $mail->Password   = 'eonwiiqzknonyjka';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;


            $mail->setFrom('mgrigoriann@gmail.com', 'Narek');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Verification Code';
            $mail->Body    = 'Your verification code is: ' . $code;

            $mail->send();

            Session::put('verificationCode', $code);

            return redirect('/enter-code');
        } catch (Exception $e) {
            return response()->json(['message' => 'Error sending email: ' . $e->getMessage()], 500);
        }
}

public function confirmEmail(Request $request)
{
    $verificationCode = $request->input('verification_code');
    $storedCode = Session::get('verificationCode');
    if ($verificationCode == $storedCode) {
        Session::put('isCodeValid', true);
        return redirect()->route('new-password.create');
    } else {
        Session::put('isCodeValid', false);
        return redirect()->back()->withErrors(['error' => 'Invalid code. Please try again']);
    }
}
    }
        
        
