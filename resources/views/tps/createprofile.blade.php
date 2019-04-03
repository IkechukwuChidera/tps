@extends('out.masters')
@section('title', 'TPS: Create Company Profile')
@section('content')

<br/><br/>
<div align="center">
<h3><b>CREATE YOUR COMPANY'S PROFILE</b></h3><br/>

  @if(!isset($tp->tps))
  <div class="form">
      <form method="POST">
      @csrf
      <div>
      <label><strong>Company Name:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="company_name" type="text" />
      </div><br/>

      <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

      <div>
      <label><strong>Company Address:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="company_address" type="text" />
      </div><br/>

      <div>
      <label><strong>Company E-Mail:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="company_email" type="text" />
      </div><br/>

      <div>
      <label><strong>Company Website:</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
      <input class="form-control" style="width:50%; height:5%;" name="company_website" type="text" />
      </div><br/>

      <div>
      <label><strong>Company Phone Number:<span class="required">*</span>&emsp;&emsp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="company_phone" type="text" />
      </div><br/>

      <div>
      <label><strong>Company Bank Name:<span class="required">*</span>&emsp;&emsp;&emsp;&ensp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="bank_name" type="text" />
      </div><br/>

      <div>
      <label><strong>Company Account Number:<span class="required">*</span>&emsp;</strong></label>
      <input class="form-control" style="width:50%; height:5%;" name="account_number" type="number" />
      </div><br/>

      <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

    </form><br/><br/>
</div>
@else

        <div class="col-md-8">
          <h4> You have already created a Company Profile</h4>
          <a href="{{route('e', Auth::user()->id)}}" class="button-blue"><b>Edit This Profile</b></a>
         <a href="{{route('vi', Auth::user()->id)}}" class="button-blue"><b>Show Company Profile</b></a>
        </div>

        @endif

@endsection('content')
