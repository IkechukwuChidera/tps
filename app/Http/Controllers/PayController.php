<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Tp;
use App\Pay;
use Illuminate\Http\Request;
use App\Http\Requests\TpRequest;
use App\Http\Requests\PayRequest;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $tp=User::whereId($id)->first();
      $tp=Tp::find($id);
      //  dd($profile);
     return view('tps.pay', compact('tp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id = Auth::user()->id;
      $post = new Pay([
         'email'=>$request->email,
         'orderID'=>$request->orderID,
         'amount'=>$request->amount,
         'month'=>$request->month,
         'reference'=>$request->reference,
         'user_id'=>$id,
     ]);
     $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $paids=Pay::whereUserId(Auth::id())->get();

      return view('tps.taxhistory')
      ->with('success','Your Payment was Successful.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
