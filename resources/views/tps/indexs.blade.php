@extends('out.master')
@section('content')

<div id="preloader">
<div id="loading-animation">&nbsp;</div>
</div>

<div class="cbp-af-header">
  <nav>

     <!-- Links -->

     <ul id="nav" >

       <li><a href="{{url ('/tps/about')}}"><b>About Us</b></a></li>

       <!-- <li><a href="{{asset ('/register')}}">REGISTER</a></li> -->

     </ul>

  </nav>
</div>

<section class="page1">

		        <div class="huge-title centered">

		          <div class="logo-phone centered"><img alt="YOURLOGO" src="{{asset ('img/logo-phone.png')}}"></div>  <!-- This Logo is only displayed on Tablet/iPhone !-->

		          <h1><b>TPS: Tax Payment System</b></h1>
              <div class="space"></div>
              <h4><b>Login to start paying your tax now.</b></h4>
              <!-- <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Google</a> -->

		          <div class="space"></div>

              <div align="center">
  		  	      <a href="#" class="goto"><img src="{{asset ('img/down.png')}}" alt="MORE"></a>
              </div>
		          <a href="{{url('/redirect')}}" class="button-white">Login with <b>Google</b></a>
              <a href="{{url('/rdirect')}}" class="button-blue">Login with <b>Facebook</b></a>

		  	    </div>

		  	    <!-- <div class="go-down twelve columns">

		  	      <a href="#container" class="goto"><img src="{{asset ('img/down.png')}}" alt="MORE"></a>

		  	    </div> -->

</section>

<!-- <div id="container" class="container"> -->

<!-- SECOND SECTION ############################################### -->

<section class="page2">

	<div class="row">

				<div class="six columns article make-it-appear-right">

					<!-- Title -->

					<h3><b>TPS Tax Payment Service</b></h3>

					<!-- Content -->

					<p><b>TPS</b> is one of the best online platforms for paying taxes easily within the globe.</p>
          <p>Kindly login now to get started.</p>

					<div class="space"></div>
					<a  class="js-open-modal button-white" href="{{url ('/redirect')}}"><strong>Login with Google</strong></a>

					<a  class="js-open-modal button-blue" href="{{url ('/rdirect')}}"><strong>Login with Facebook</strong></a>
				  </div>

				<!-- Image from right -->

				<div class="five columns picture make-it-appear-left" >

					<img src="{{asset ('img/1.png')}}" alt="EXEMPLE">

				</div>

			</div> <!-- End row div -->

</section>

<!-- Modal Window -->

<div class='modal' id='modal'>

	  <div class='modal-content modal-anim--three'>



	  </div>

</div>



@endsection('content')
