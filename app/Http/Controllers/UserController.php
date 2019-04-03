<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Tp;
use Illuminate\Http\Request;
use App\Http\Requests\TpRequest;


class UserController extends Controller
{
    //
    public function create(){
        $id=Auth::user()->id;

        $tp = User::whereId($id)->first();
        // dd($profile->profile);
        return view ('tps.createprofile', compact('tp')) ;
    }
    public function store(Request $request){
        //dd($request->all());
         $id = Auth::user()->id;
        $tp = new Tp([
            'company_name'=>$request->company_name,
            'company_address'=>$request->company_address,
            'company_email'=>$request->company_email,
            'bank_name'=>$request->bank_name,
            'company_website'=>$request->company_website,
            'account_number'=>$request->account_number,
            'company_phone'=>$request->company_phone,
            'user_id'=>$id
        ]);
             $tp->save();
                return redirect('/tps/profile');
        // Profile::create(request(['company_name','company_address','email',
        // 'website','account_number','phone_no','feedback']));
        // return redirect('/user/profile');


    }

    //code for viewing users information
    public function view(){
        $id= Auth::user()->id;
        $tp=User::whereId($id)->first();
        return view('tps.profile',compact('tp'));
    }


    //code for editing and updating company's profiles
    public function edit($id){
        $tp=Tp::find($id);
        //  dd($profile);
       return view('tps.editprofile', compact('tp'));
    }

    public function update(Request $request, $id){
        $tp=Tp::whereId($id)->first();
        $tp->company_address=$request->company_address;
        $tp->company_email=$request->company_email;
        $tp->company_website=$request->company_website;
        $tp->company_name=$request->company_name;
        $tp->bank_name=$request->bank_name;
        $tp->company_phone=$request->company_phone;
        $tp->account_number=$request->account_number;

        $tp->save();
        return redirect('/tps/profile');
    }


//code for uploading documents


    // code for users homepage
    // public function index(){
    //   $tps = Tp::all();
    //   return view('tps.profile', compact('tps'));
    // }

    public function indexs(){
        return view ('tps.indexs');
    }

    public function home()
    {
        return view('tps/home');
    }

}
