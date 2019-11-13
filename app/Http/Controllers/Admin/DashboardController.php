<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function index() {
//        $user = Auth::user();
        return view('admin.dashboard');
    }

//    public function getUserInfo($id) {
//        $user = User::find($id);
//    }

}
