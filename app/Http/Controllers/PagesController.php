<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('welcome');
    }

    public function getAbout() {
        return view('about');
    }

    public function getContact() {
        return view('contact');
    }

//    public function postContact() {
//
//    }


}
