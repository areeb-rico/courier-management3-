<?php

namespace App\Http\Controllers;
use App\Models\rider;
use Illuminate\Http\Request;

class ridercontroler extends Controller
{
      public function register(Request $req)
      {
$r = new rider();
       //Left Wala Table Name = Right Wala form se arha hai
       $r->RiderName = $req->RiderName;
       $r->RiderEmail = $req->RiderEmail;
       $r->RiderPassword = $req->RiderPassword;
       $r->RiderAddress = $req->RiderAddress;
       $r->RiderCnic = $req->RiderCnic;
       $r->RiderPhone = $req->RiderPhone;

       $r->save();
       return redirect()->back()->with('Message','Rider has been added');
      }
       public function getriders()
    {
        $r = rider::get();
        return view('admin.viewrider',compact('r'));
    }
}
