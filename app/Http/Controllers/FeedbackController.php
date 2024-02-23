<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedbackform');
    }

    public function send(Request $request)
    {
        // Process the form submission here
        // You would generally validate and store the data and perhaps send an email

        // After processing, you can redirect with a message
        return redirect('/feedback')->with('message', 'Feedback sent successfully!');
    }
}



