<?php

namespace App\Http\Controllers;
use App\Tp;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{

  public function index()
  {
      $tp = Tp::latest()->paginate(5);

      return view('tpsadmin.index',compact('tps'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }

}
