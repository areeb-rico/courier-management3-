<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
