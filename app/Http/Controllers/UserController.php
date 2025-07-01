<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Parcel;

class UserController extends Controller
{
    //
    public function updateRiderRequest(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            
            'rider_address' => 'required|string',
            'rider_phone' => 'required|string',
        ]);

        // Find the user by ID
        $user = User::find($id);

        // Update the user's rider request details
        $user->rider_request = 'Pending';
        $user->rider_address = $request->rider_address;
        $user->rider_phone = $request->rider_phone;

        // Save the changes
        $user->save();
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Rider request updated successfully.');
    }
   public function FindParcelForUser(Request $req)
    {
      $pcode = $req->input('PCode');
      // $p = Parcel::where('ParcelCode',$pcode)->join('riders')->get();    
     $p = Parcel::join('riders', 'parcels.RiderId', '=', 'riders.id')
           ->leftjoin('currentlocations', 'riders.id', '=', 'currentlocations.RiderId')
           
           ->where('ParcelCode', $pcode)
           ->select(
            'parcels.*',
            'riders.RiderName',
            'riders.RiderPhone',
            'currentlocations.Latitude',
            'currentlocations.Longitude'
        )
        ->first();
           

      
      
    
    if ($p) {
        return response()->json([$p]); // keep as array for frontend compatibility
    } else {
        return response()->json([], 404);
    }
    }
}
