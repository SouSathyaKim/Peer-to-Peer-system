<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyLoan;

class ApplyLoanController extends Controller
{
    public function create()
    {
        return view('applyloan');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'gender' => 'required|string',
            'fullName' => 'required|string|max:255',
            'phoneNo' => 'required|string|max:20',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'loanPurpose' => 'required|string|max:255',
            'loanAmount' => 'required|numeric',
            'occupation' => 'required|string|max:255',
            'companyName' => 'required|string|max:255',
            'monthlyIncome' => 'required|numeric',
            'monthlyLiabilities' => 'required|numeric',
        ]);

        // Create a new loan application record
        ApplyLoan::create($request->all());

        // Redirect back to the form with a success message
        return redirect()->route('apply_loan.create')->with('success', 'Loan application submitted successfully.');
    }
}
