<?php

namespace App\Http\Controllers;
use App\Models\rider;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\currentlocation;

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
   public function uploadParcel(Request $req)
{
    // Optional: validate data
    $req->validate([
        'ParcelName' => 'required',
        'ParcelSender' => 'required',
        'ParcelSenderLocation' => 'required',
        'ParcelReceiver' => 'required',
        'ParcelReceiverLocation' => 'required',
        'ParcelReceiverPhoneNumber' => 'required',
        'ParcelWeight' => 'required|numeric',
        'ParcelUnit' => 'required',
        'RiderId' => 'required|exists:riders,id',
        'ParcelImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    $p = new \App\Models\Parcel(); // use correct model

    $p->ParcelName = $req->ParcelName;
    $p->ParcelCode = mt_rand(10000, 99999);
    $p->SentByName = $req->ParcelSender;
    $p->SentByLocation = $req->ParcelSenderLocation;
    $p->SentToName = $req->ParcelReceiver;
    $p->SentToLocation = $req->ParcelReceiverLocation;
    $p->SentToContact = $req->ParcelReceiverPhoneNumber;
    $p->ParcelWeight = $req->ParcelWeight;
    $p->ParcelUnit = $req->ParcelUnit;
    $p->RiderId = $req->RiderId;

    // Handle file upload
    if ($req->hasFile('ParcelImage')) {
        $file = $req->file('ParcelImage');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $p->ParcelImage = $filename;
    }

    $p->save(); // 💾 Save to database

    // ✅ Redirect with success message
    return redirect()->back()->with('success', 'Your parcel has been uploaded successfully!');
}


    public function getparcelform()
    {
        $rider = User::where('userrole','rider')->get();
        return view('riderdash.uploadparcel',compact('rider'));

    }

    public function getparcels()
    {
        $parcels = Parcel::get();
        return view('riderdash.viewparcel',compact('parcels'));
    }
     public function getparceladmin()
    {
        $parcels = Parcel::get();
        return view('admin.viewparcel',compact('parcels'));
    }
     public function logoutrider()
    {
        session()->forget('riderid');
        return redirect('/riderlogin');
    }
    public function sharelocation(Request $req)
    {
       
       
       
        $cl = new currentlocation();
        $cl->Latitude =  $req->latitude;
        $cl->Longitude =  $req->longitude;
        $cl->RiderId =  $req->riderid;
        $cl->save();
        return redirect()->back();
    }
}
