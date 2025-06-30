<?php

namespace App\Http\Controllers;
use App\Models\rider;
use App\Models\User;
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
       public function viewrider()
    {
        $r = User::where('rider_request','Pending')->get();
        return view('admin.viewrider',compact('r'));
    }
    public function acceptrider($id)
    {
        $r = User::find($id);
        if($r) {
            $r->rider_request = 'Accepted';
            $r->userrole = 'rider';
            $r->save();
            return redirect()->back()->with('Message', 'Rider request accepted successfully');
        }
        return redirect()->back()->with('Error', 'Rider not found');
    }
    public function rejectrider($id)
    {
        $r = User::find($id);
        if($r) {
            $r->rider_request = 'Rejected';
            $r->userrole = 'user';
            $r->save();
            return redirect()->back()->with('Message', 'Rider request rejected successfully');
        }
        return redirect()->back()->with('Error', 'Rider not found');
    }
}
