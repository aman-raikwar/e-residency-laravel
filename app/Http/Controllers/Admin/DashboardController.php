<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BaseController {

    public function index() {
        return view('admin.dashboard.index');
    }

    public function login() {
        return view('admin.dashboard.login');
    }

    public function settings() {
        return view('admin.dashboard.settings');
    }

}
