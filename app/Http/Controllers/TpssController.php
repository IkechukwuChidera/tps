<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use App\Tp;
use Illuminate\Http\Request;
use Auth;
class TpsController extends Controller
{

  public function index()
  {

    return view('tpss.index');

  }

  public function home()
  {
      return view('tps/home');
  }

  public function pay()
  {
      return view('tps/pay');
  }

  public function profile()
  {
    $tps = Tp::all();
    return view('tps.profile', compact('tps'));
  }

  // public function create()
  // {
  //     return view('tps.create');
  // }

  public function createprofile()
  {
      return view('tps/createprofile');
  }

  public function edit(Tp $tp)
  {
      return view('tps.edit', compact('tp'));
  }

  public function store(Request $request)
  {
    $request->validate([
        'company_name' => 'required',
        'company_address' => 'required',
        'company_email' => 'required',
        'company_website' => 'required',
        'company_phone' => 'required',
    ]);

    Tp::create($request->all());

    return redirect('tps/profile')
                    ->with('success','Profile created successfully.');
  }

  public function update(Request $request, Tp $tp)
  {
    $request->validate([
      'company_name' => 'required',
      'company_address' => 'required',
      'company_email' => 'required',
      'company_website' => 'required',
      'company_phone' => 'required',
    ]);

    $tp->update($request->all());

    return redirect('tps/profile')
                    ->with('success','Profile updated successfully');
  }



}
