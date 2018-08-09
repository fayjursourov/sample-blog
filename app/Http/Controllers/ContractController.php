<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;


class ContractController extends Controller
{
    //

    public function send(Request $request){
        $name = $request->input('name');
        $email_address = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // Create the email and send the message
        $to = 'fayjursourov@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Website Contact Form:  $name";
        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";
        mail($to,$email_subject,$email_body,$headers);

        return redirect('contract')->with('message', 'Success!');

    }

    public function index(){
        return view('contract');
    }
}
