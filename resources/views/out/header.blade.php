<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- [if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif] -->
<head>

  <!-- Meta tags & title /-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>TPS: Tax Payment System</title>
  <meta name="description" content="This template is an easy to use app landing page, responsive and pretty easy to customize including some great easing effects, modal window, a sticky header with share buttons & others stuff !" />
  <meta name="keywords" content="Free, template, easy to use, customise, one page, template, simple, minimal, landing page, app page, supview" />
  <meta name="author" content="Supview - François Martin">

  <!-- Favicon /-->
  <link rel="shortcut icon" href="favicona.png" type="image/x-icon" /> <!-- Favicon /-->

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- Stylesheets /-->
  <link rel="stylesheet" href="{{asset ('css/gumby.css')}}">   			<!-- Gumby Framework /-->
  <link rel="stylesheet" href="{{asset ('css/style.css')}}">   			<!-- Main stylesheet /-->
  <link rel="stylesheet" href="{{asset ('css/animate.css')}}"> 			<!-- Animations /-->

  <script src="{{asset ('js/modernizr-2.6.2.min.js')}}"></script>  <!-- Modernizr /-->

</head>

<body>
<!-- Preload the Whole Page -->

<div id="preloader">
<div id="loading-animation">&nbsp;</div>
</div>

<!-- NAVIGATION ############################################### -->
<div class="cbp-af-header">
  <nav>

     <!-- Links -->
     <div id="logo">
      <ul>
      <li><h4><b>Welcome, </b><strong>{{ Auth::user()->name }}</strong></h4></li>
    </ul>
     </div>
     <ul id="nav" >
       <li><a href="{{ url('/logout') }}"><b> Logout </b></a></li>
       <li><a href="{{route('vi', Auth::user()->id)}}"><b> My Company's Profile </b></a></li>
       <li><a href="{{route('c', Auth::user()->id)}}"><b> Create Company's Profile </b></a></li>
     </ul>

  </nav>
</div>
<!-- END NAVIGATION ############################################### -->
<section class="page1">

		        <div class="huge-title centered">

		          <div class="logo-phone centered"><img alt="YOURLOGO" src="{{asset ('img/logo-phone.png')}}"></div>  <!-- This Logo is only displayed on Tablet/iPhone !-->

		          <h1><b>TPS: Tax Payment System</b></h1>

		          <div class="space"></div>

		          <a href="/tps/pay" class="button-white">Pay Tax Now</a>

		  	    </div>

</section>
