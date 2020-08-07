<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

use Illuminate\support\Facades\Notification;

class paymentscontroller extends Controller
{
    public function create()
    {
        return view('payments.create');
    }
    public function  store()
    {
       event(new ProductPurchased('toy'));
    }
}
