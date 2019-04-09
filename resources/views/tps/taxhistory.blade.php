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
<h3><b>MY TAX HISTORY</b></h3><br/>

<table class="table table-bordered">

        <tr>

            <th><b>No</b></th>
            
            <th><b>Reference ID</b></th>
            <th><b>Date and Time of Payment</b></th>

        </tr>
                @foreach ($post as $posts)
        <tr>

            <td>{{ $loop->index+1 }}</td>

            <td>{{ $posts->reference }}</td>
            <td>{{ $posts->created_at }}</td>

        </tr>
        @endforeach
    </table><br/>



@endsection
