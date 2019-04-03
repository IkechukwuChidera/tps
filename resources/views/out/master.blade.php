
<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>TPS: Tax Payment System</title>
  <meta name="description" content="This template is an easy to use app landing page, responsive and pretty easy to customize including some great easing effects, modal window, a sticky header with share buttons & others stuff !" />
  <meta name="keywords" content="Free, template, easy to use, customise, one page, template, simple, minimal, landing page, app page, supview" />
  <meta name="author" content="Supview - François Martin">


  <link rel="shortcut icon" href="favicona.png" type="image/x-icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">


  <link rel="stylesheet" href="{{asset ('css/gumby.css')}}">
  <link rel="stylesheet" href="{{asset ('css/style.css')}}">
  <link rel="stylesheet" href="{{asset ('css/animate.css')}}">




</head>

<body>

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
