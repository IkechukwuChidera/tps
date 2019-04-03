@extends('out.masters')

@section('content')
<br/><br/>
<div align="center">
<h3><b>EDIT YOUR COMPANY'S PROFILE</b></h3><br/>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST">
        @csrf

        <div>
        <label><strong>Company Name:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="company_name" type="text" value="{{ $tp->company_name }}"/>
        </div><br/>

        <div>
        <label><strong>Company Address:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="company_address" type="text" value="{{ $tp->company_address }}"/>
        </div><br/>

        <div>
        <label><strong>Company E-Mail:<span class="required">*</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="company_email" type="text" value="{{ $tp->company_email }}"/>
      </div><br/>

        <div>
        <label><strong>Company Website:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="company_website" type="text" value="{{ $tp->company_website }}"/>
        </div><br/>

        <div>
        <label><strong>Company Phone Number:<span class="required">*</span>&emsp;&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="company_phone" type="text" value="{{ $tp->company_phone }}"/>
        </div><br/>

        <div>
        <label><strong>Company Bank Name:<span class="required">*</span>&emsp;&emsp;&emsp;&ensp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="bank_name" type="text" value="{{ $tp->bank_name }}"/>
        </div><br/>

        <div>
        <label><strong>Company Account Number:<span class="required">*</span>&emsp;</strong></label>
        <input class="form-control" style="width:50%; height:5%;" name="account_number" type="number" value="{{ $tp->account_number }}"/>
        </div><br/>

        <div class="col-lg-offset-2 col-lg-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

        </form><br/><br/>
</div>

@endsection('content')
