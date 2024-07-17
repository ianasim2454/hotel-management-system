<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\User;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype === 'user'){
                return view('frontend.pages.home');
            }
            else if($usertype === 'admin'){
                return view('admin.app');
            }else{
                return redirect()->back();
            }
        }
    }
}
