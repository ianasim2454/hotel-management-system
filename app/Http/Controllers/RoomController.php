<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room(){
        return view('frontend.pages.room');
    }
}
