<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomePage extends Controller
{
    // homepage
    public function homepage() {
        // // return view('welcome', ['name'=> 'abhijith']);
        // $todo = Todo::all();
        // // dd($todo);
        return view('index', []);
    }


    // services
    public function services() {
        return view('services', []);
    }


    // contact - send email
    public function contact_send_mail(Request $request) {
        // dd($request->all());
        try {
            $mailData = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($mailData));

            // return redirect()->back()->with('success', 'Email send successfully');
            return redirect()->back()->with('success',  $request->name);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Something went wrong, Please try again later');
        }
    }
}
