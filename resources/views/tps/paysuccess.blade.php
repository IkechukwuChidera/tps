@extends('out.masters')
@section('title', 'TPS: Create Company Profile')
@section('content')

<br/>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p><h3>{{ $message }}</h3></p>
        </div>
    @endif<br/>
<div align="center">
<!-- <h3><b>MY TAX HISTORY</b></h3><br/> -->

  <a  class="js-open-modal button-blue" href="{{route('hi', Auth::user()->id)}}"><strong>View Transaction Details</strong></a>
  <br/><br/><br/>

@endsection('content')
