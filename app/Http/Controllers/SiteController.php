<?php

namespace App\Http\Controllers;

class SiteController extends Controller {

    public function index() {
        return view('frontend.site.index');
    }

    public function about() {
        return view('frontend.site.about');
    }

    public function contact() {
        return view('frontend.site.contact');
    }

    public function team() {
        return view('frontend.site.team');
    }
    
    public function info() {
        return phpinfo();
    }

}
