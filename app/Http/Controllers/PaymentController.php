<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function create()
    {
        return view('payment');
    }

    public function store(Request $request)
    {
        // Validate the request data
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
            // Create a new payment record
            $payment = new Payment();
            $payment->amount = $request->amount;
            $payment->description = $request->description;
            $payment->transaction_type = $request->transaction_type;
            $payment->payment_method = $request->payment_method;
            $payment->user_id = $user->id;  // Associate payment with the user
            $payment->save();

            // Redirect back to the form with a success message
            return redirect()->route('payment.create')->with('success', 'Payment recorded successfully.');
        }

        // Redirect back to the form with an error message
        return redirect()->route('payment.create')->with('error', 'Invalid PIN.');
    }

    // public function records()
    // {
    //     // Fetch all payment records including transaction_type
    //     $payments = DB::table('payments')->select('id', 'amount', 'created_at', 'user_id', 'transaction_type')->get();

    //     // Pass the records to the view
    //     return view('records', ['payments' => $payments]);
    // }
}
