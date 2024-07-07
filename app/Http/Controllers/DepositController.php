<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
{
    public function create()
    {
        return view('deposit');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'description' => 'required|string|max:255',
            'deposit_method' => 'required|string|max:255',
        ]);

        // Create a new deposit record
        $user = User::find($request->user_id);
        if ($user) {
            $deposit = new Deposit();
            $deposit->amount = $request->amount;
            $deposit->description = $request->description;
            $deposit->user_id = $request->user_id;
            $deposit->deposit_method = $request->deposit_method;
            $deposit->save();

            // Redirect back to the form with a success message
            return redirect()->route('deposit.create')->with('success', 'Deposit recorded successfully.');
        }

        return redirect()->route('deposit.create')->with('error', 'Invalid user.');
    }

    // public function records()
    // {
    //     // Fetch all deposit records
    //     $deposits = DB::table('deposits')->select('id', 'user_id', 'amount', 'deposit_method', 'created_at')->get();
        
    //     // Fetch all payment records
    //     $payments = DB::table('payments')->select('id', 'user_id', 'amount', 'transaction_type', 'created_at')->get();

    //     // Pass the records to the view
    //     return view('records', ['deposits' => $deposits, 'payments' => $payments]);
    // }
}
