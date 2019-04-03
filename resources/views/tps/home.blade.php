@extends('out.masters')
@section('content')

<!-- <div id="container" class="container"> -->

<!-- SECOND SECTION ############################################### -->

<section class="page2">

	<div class="row">

				<div class="six columns article make-it-appear-right">

					<!-- Title -->

					<h3><b>TPS Tax Payment Service</b></h3>

					<!-- Content -->

					<p><b>TPS</b> is one of the best online platforms for paying taxes easily within the globe.</p>
          <p>To pay your tax now, kindly click on the link below.</p>

					<div class="space"></div>

					<a  class="js-open-modal button-blue" href="{{url ('/tps/pay')}}"><strong>Make Tax Payments</strong></a>


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
