<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TransferController extends Controller
{
    public function create()
    {
        return view('transfer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string|max:255',
            'transaction_type' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'pin' => 'required|digits:4',
        ]);

        // Validate the PIN
        $user = Auth::user();
        if ($user && Hash::check($request->pin, $user->pin)) {
            // Create a new transfer record
            $transfer = new Transfer();
            $transfer->user_id = $user->id;
            $transfer->transaction_type = $request->transaction_type;
            $transfer->amount = $request->amount;
            $transfer->description = $request->description;
            $transfer->payment_method = $request->payment_method;
            $transfer->save();

            // Redirect back to the form with a success message
            return redirect()->route('transfer.create')->with('success', 'Transfer completed successfully.');
        }

        // Redirect back to the form with an error message
        return redirect()->route('transfer.create')->with('error', 'Invalid PIN.');
    }
}
