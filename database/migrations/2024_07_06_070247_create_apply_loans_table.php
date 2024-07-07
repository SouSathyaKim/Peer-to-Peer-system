<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLoansTable extends Migration
{
    public function up()
    {
        Schema::create('apply_loans', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('fullName');
            $table->string('phoneNo');
            $table->date('dob');
            $table->string('email');
            $table->string('loanPurpose');
            $table->decimal('loanAmount', 10, 2);
            $table->string('occupation');
            $table->string('companyName');
            $table->decimal('monthlyIncome', 10, 2);
            $table->decimal('monthlyLiabilities', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apply_loans');
    }
}
