@extends('out.masters')
@section('content')

<div align="center">
<div align="center">
<h3><b>PAY TAX NOW</b></h3><br/>
</div>

<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">

            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

            <div>
            <label><strong>Company Name:<span class="required">*</span>&nbsp</strong></label>
            <input class="form-control" style="width:50%; height:5%;" name="orderID" type="text"s value="{{$tp->company_name}}" readonly/>
            </div><br/>

            <div>
            <label><strong>Company E-mail:<span class="required">*</span></strong></label>
            <input class="form-control" style="width:50%; height:5%;" name="email" type="text" value="{{$tp->company_email}}"/ readonly> {{-- required --}}
            </div><br/>

            <div>
            <label><strong>Tax Amount:<span class="required">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong></label>
            <input class="form-control" style="width:50%; height:5%;" name="amount" type="text" />
            </div><br/>

            <div>
              <label for="month" class="control-label col-lg-2"><strong>Month</strong><span class="required">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>

              <select class="form-control form-control-lg" style="width:50%; height:5%;" name="month">
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
              <!-- <input type="form-control" style="width:70%;" name="quantity" value=""> -->

            </div>

            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

             <br/>
            <p>
              <button class="btn btn-primary" type="submit" value="Pay Now!">
               Pay Tax Now!
              </button>
            </p>
          </div>
        </div>
</form>
</div>

@endsection('content')
