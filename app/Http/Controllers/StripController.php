<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
use Stripe\Stripe as StripeStripe;

class StripController extends Controller
{
    public function stripe()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();
        return view('payement.strip',compact('orders'));
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            'amount' => $request->total*100,
            'currency'=>"usd",
            'source'=> $request->stripeToken,
            'description' =>"Test payment from ". $request->name,
        ]);

        Session::flash('success','Payment has been successfully');
        return back();
    }
}
