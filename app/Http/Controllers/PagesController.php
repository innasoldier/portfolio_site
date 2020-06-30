<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use Session;
use Mail;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('pages.welcome');
    }

    public function getAbout() {
        $name = "Inna";
        $last_name = "Soldatkina";
        $fullname = $name . " " . $last_name;
        $email = 'inna.soldier@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;


        //return view('pages.about')->with("fullname", $fullname);
        //return view('pages.about')->withFullname($fullname)->withEmail($email); //shortcut
        return view('pages.about', [
            'fullname'=>$fullname,
            'email' => $email
        ]); //passing with associative array

    }

    public function getContact() {
        return view('pages.contact');
    }

    public function projectContact(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'message' => 'min:10',
            'subject' => 'min:3'
        ]);

        $data = array(
            'email' => $request->email,
            'subject'=> $request->subject,
            'bodyMessage' =>$request->message,
        );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from($data['email']);
            $message->to('inna.soldier@gmail.com');
            $message->subject($data['subject']);

        });

        Session::flash('success', 'Your message was sent. Thank you!');

        return redirect('/');
    }

    public function getProjects() {
        return view('pages.projects');
    }
//    public function postContact() {
//
//    }


}
