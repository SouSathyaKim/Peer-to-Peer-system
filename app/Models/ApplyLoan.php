<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'fullName',
        'phoneNo',
        'dob',
        'email',
        'loanPurpose',
        'loanAmount',
        'occupation',
        'companyName',
        'monthlyIncome',
        'monthlyLiabilities',
    ];
}
