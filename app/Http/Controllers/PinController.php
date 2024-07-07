<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PinController extends Controller
{
    public function create()
    {
        return view('pin');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'pin' => 'required|digits:4|confirmed',
        ]);

        // Update the user's PIN
        $user = Auth::user();
        if ($user) {
            $user->pin = Hash::make($request->pin);
            $user->save();

            // Redirect with success message
            return redirect()->route('pin.create')->with('success', 'PIN created successfully.');
        }

        return redirect()->route('pin.create')->with('error', 'User not authenticated.');
    }
}

