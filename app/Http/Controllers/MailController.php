<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        return response()->json([
            'msg' => 'message'
        ]);
    }
}
