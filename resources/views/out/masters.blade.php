<body>
  @include('out.header')
  @yield('content')
  @include('out.footer')
<script src="{{asset ('js/modernizr-2.6.2.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>

<script src="{{asset ('js/main.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/classie.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/jquery.scrollto.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/mediaCheck.js')}}" type="text/javascript"></script>


</body>
