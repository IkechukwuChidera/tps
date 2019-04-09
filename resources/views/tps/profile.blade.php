@extends('out.masters')

@section('title', 'My Company Profile')
@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><h3>{{ $message }}</h3></p>
        </div>
    @endif

    <br/><br/>
<div align="center">
    <h3><b>MY COMPANY'S PROFILE</b></h3><br/>
@if(isset($tp->tps))
    <table class="table table-bordered">

        <tr><td>Company Name:&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;{{ $tp->tps->company_name }}</td></tr>
        <tr><td>Company Address:&emsp;&emsp;&emsp;&emsp;&ensp;{{ $tp->tps->company_address }}</td></tr>
        <tr><td>Company E-mail:&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;{{ $tp->tps->company_email }}</td></tr>
        <tr><td>Company Website:&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;{{ $tp->tps->company_website }}</td></tr>
        <tr><td>Company Phone:&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;{{ $tp->tps->company_phone }}</td></tr>
        <tr><td>Company Bank Name:&emsp;&emsp;&emsp;&nbsp;{{ $tp->tps->bank_name }}</td></tr>
        <tr><td>Company Account Number:&emsp;{{ $tp->tps->account_number }}</td></tr>


    </table>
    @else
    <h4>You don't have Profile Information Yet</h4>

    <a href="{{route('c', Auth::user()->id)}}" class="button-blue"><b>Create Company Profile</b></a>

@endif
    <a href="{{route('e', Auth::user()->id)}}" class="button-blue"><b>Edit This Profile</b></a>

  </div><br/><br/>

@endsection('content')
