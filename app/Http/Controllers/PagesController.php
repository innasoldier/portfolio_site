<?php

namespace App\Http\Controllers;

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

    public function getProjects() {
        return view('pages.projects');
    }
//    public function postContact() {
//
//    }


}
