@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
              <table class="table table-bordered">

                      <tr>
                          <th>No</th>
                          <th>Company Name</th>
                          <th>Company Address</th>

                      </tr>

                      <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $tp->company_name }}</td>
                          <td>{{ $tp->company_address }}</td>
                      </tr>
                    
                  </table>
    </div>
</div>


</body>
@endsection('content')
