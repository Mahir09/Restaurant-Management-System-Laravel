<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

class AdminController extends Controller
{
    //
    public function user()
    {
        $data = user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu",compact("data"));
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $req)
    {
        $data = food::find($req->id);

        $image = $req->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);
        
        $data->image = $imagename;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        $data->save();

        return redirect()->back();
    }

    public function uploadfood(Request $req)
    {
        $data = new Food;

        $image = $req->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $req->image->move('foodimage',$imagename);
        
        $data->image = $imagename;
        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        $data->save();

        return redirect()->back();

    }

    public function reservation(Request $req)
    {
        $data = new Reservation;

        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone  = $req->phone ;
        $data->guest  = $req->guest ;
        $data->date = $req->date ;
        $data->time = $req->time ;
        $data->message  = $req->message;


        $data->save();

        return redirect()->back();

    }

    public function viewreservation()
    {
        $data=reservation::all();
        return view("admin.adminreservation",compact("data"));
    }

    public function viewchef()
    {
        $data = foodchef::all();
        return view("admin.adminchef",compact("data"));
    }

    public function uploadchef(Request $req)
    {
        $data = new Foodchef;

        $image = $req->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $req->image->move('chefimage',$imagename);
        
        $data->image = $imagename;
        $data->name = $req->name;
        $data->speciality = $req->speciality;

        $data->save();

        return redirect()->back();

    }

    public function deletechef($id)
    {
        $data = foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatechef(Request $req)
    {
        $data = foodchef::find($req->id);
        return view("admin.updatechef",compact("data"));
    }

    public function updatefoodchef(Request $req)
    {
        $data = foodchef::find($req->id);
        $image = $req->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $req->image->move('chefimage',$imagename);
            $data->image = $imagename;
        }        
        $data->name = $req->name;
        $data->speciality = $req->speciality;
        
        $data->save();

        return redirect()->back();
    }

    

}
