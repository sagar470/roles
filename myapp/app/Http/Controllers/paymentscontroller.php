<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

class paymentscontroller extends Controller
{
    public function create()
    {
        return view('payments.create');
    }
    public function  store()
    {
        Notification::send(request()->user()),new PaymentReceived());
    }
}
