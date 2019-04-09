<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Paystack;
use App\Pay;
use App\Tp;
use App\Http\Requests\PayRequest;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
      return Paystack::getAuthorizationUrl()->redirectNow()
      ->with('success','Your Payment was Successful.');
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function paysuccess(Request $request)
    {
      $id = Auth::user()->id;
      $pay = new Pay([
         'reference'=>$request->reference,
         'user_id'=>$id,
     ]);
     $pay->save();

     return view('tps/paysuccess');
   }



}
