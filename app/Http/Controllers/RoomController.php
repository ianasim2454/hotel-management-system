<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //front end part
    public function room(){
        return view('frontend.pages.room');
    }




    //admin part
    public function create_room(){
        return view('admin.components.create_room');
    }

   public function upload_room(Request $request){
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->img;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->img->move('room',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        toastr()->timeOut(5000)->closeButton()->success('New Room Added Successfully');
        return redirect()->back();        
   }
}
