<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Transfer;
use App\Models\ApplyLoan;
use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;

class TransactionHistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $payments = Payment::where('user_id', $user->id)->get();
        $transfers = Transfer::where('user_id', $user->id)->orWhere('recipient_id', $user->id)->get();
        $applyLoans = ApplyLoan::where('user_id', $user->id)->get();
        $deposits = Deposit::where('user_id', $user->id)->get();

        return view('transaction_history.index', compact('payments', 'transfers', 'applyLoans', 'deposits'));
    }

    public function create()
    {
        return view('transaction_history.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string|max:255',
            'transaction_type' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        Payment::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'description' => $request->description,
            'transaction_type' => $request->transaction_type,
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('transaction_history.index')->with('success', 'Payment created successfully.');
    }

    public function show($id)
    {
        $payment = Payment::findOrFail($id);

        return view('transaction_history.show', compact('payment'));
    }

    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('transaction_history.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string|max:255',
            'transaction_type' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('transaction_history.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('transaction_history.index')->with('success', 'Payment deleted successfully.');
    }
}
 