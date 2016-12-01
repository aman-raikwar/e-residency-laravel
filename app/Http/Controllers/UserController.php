<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('frontend.user.index');
    }

    public function profile() {
        return view('frontend.user.profile');
    }

    public function addProperty() {
    	return view('frontend.user.add-property');
    }

}
