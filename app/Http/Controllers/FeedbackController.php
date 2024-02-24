<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedbackform');
    }

   

public function success()
{
    return view('feedback.success');
}


public function send(Request $request)
{
    $validatedData = $request->validate([
        'full_name' => 'required|max:255', // Note: Changed from 'fullname' to 'full_name' to match form input name
        'email' => 'required|email',
        'comments' => 'required',
    ]);

    // Access the validated data for sending the email
    Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')->send(new Feedback(
        $validatedData['full_name'], // Correctly access the validated full name
        $validatedData['email'], // Correctly access the validated email
        $validatedData['comments'] // Correctly access the validated comments
    ));

    return redirect()->route('feedback.success');
}


    
    
}

