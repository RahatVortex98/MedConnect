<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        if(Auth::check()&& Auth::user()->role==='user'){
            return view('dashboard');
        }
        else if(Auth::check()&& Auth::user()->role==='admin'){
            return view('admin.admin-dashboard');
        }
        else{
            return abort(403,'Unauthorized');
        }
    }

    public function home(){
        return view('main');
    }
    public function aboutUs(){
        return view('pages.about-us');
    }
}
