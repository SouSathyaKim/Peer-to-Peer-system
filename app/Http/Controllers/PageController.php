<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
     //Action
     public function home(){
        return view('home');
    }
     //Action
     public function about(){
        return view('about');
    }
    //Action
    public function service(){
        return view('service');
    }
    public function project(){
        return view('project');
    }
    public function feedback(){
        return view('feedback');
    }
    public function team(){
        return view('team');
    }
    public function contact(){
        return view('contact');
    }
    // public function login(){
    //     return view('login');
    // }
    public function profile(){
        return view('profile');
    }
    public function loancal(){
        return view('loancal');
    }
    public function payment(){
        return view('payment');
    }
    public function deposit(){
        return view('deposit');
    }
    public function applyloan(){
        return view('applyloan');
    }
    public function pin(){
        return view('pin');
    }
    public function transfer(){
        return view('transfer');
    }
    public function transaction_history(){
        return view('transaction_history');
    }
    public function history(){
        return view('history');
    }
    public function records()
    {
        $deposits = DB::table('deposits')->select('id', 'user_id', 'amount', 'deposit_method', 'created_at')->paginate(10);
        $payments = DB::table('payments')->select('id', 'user_id', 'amount', 'transaction_type', 'created_at')->paginate(10);
        $loans = DB::table('apply_loans')->select('id', 'fullName', 'email', 'loanAmount', 'loanPurpose', 'created_at')->paginate(10);
        
        return view('records', ['deposits' => $deposits, 'payments' => $payments, 'loans' => $loans]);
    }
    
}
