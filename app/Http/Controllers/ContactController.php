<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Rules\ReCaptchaV3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact', ['title' => 'Contact']);
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'messageContent' => 'required|max:750',
        ]);

        $recipientEmail = config('mail.to');

        try {
            Mail::to($recipientEmail)
                ->send(
                    new ContactEmail(
                        $validatedData['name'],
                        $validatedData['email'],
                        $validatedData['messageContent'],
                    )
                );
        } catch (Throwable $ex) {
            $code = $ex->getCode();
            Log::debug($ex);

            if ($code >= 400 && $code < 500) {
                return back()->with('error', "An error occurred, please try sending your message again.");
            } else {
                return back()->with('error', "Climb Crux Conquer is experiencing issues, click the envelope icon in the footer to send an email directly to Climb Crux Conquer's Founder Sammi.");
            }
        }

        return back()->with('success', 'Message sent successfully!');
    }
}
