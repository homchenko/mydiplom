<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class MailController extends Controller
{
    public function feedback() {
        return view('feedback');
    }

    public function sendmail(Request $request) {

        Feedback::create($request->all());
        $feedback = [];
        $feedback['name'] = $request->input('name');
        $feedback['email'] = $request->input('email');
        $feedback['message'] = $request->input('message');
        Mail::to($feedback['email'])->send(new   FeedbackMail   ($feedback));
//        return response()->json([
//            'msg' => 'message'
//        ]);
        return view('mails.feedback');
//        return view('mails.feedback', compact('feedback'));
    }
}
