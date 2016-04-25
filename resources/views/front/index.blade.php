@extends('front.template')

@section('main')
	<section class="customer ">
	<div class="container section-padding">
	<div class="row">
		
			<div class="col-lg-12">
				
				<div class="row">
				<div class="col-md-6">
				<h2><span class="heading-note"> </span>Small idea, Big deffirence!</h2>
				<h4>small idea!</h4>
				<h4>Hire expert in Coordinate</h4>
				<h4>Project Done!</h4>
				<h4>Progressing in your Busniess!</h4>
				<div class="row">
				<div class="col-md-6">
				<button type="button" class="btn btn-lg btn-info btn-block">I want to Hire</button>
				</div>
				<div class="col-md-6">
				<button type="button" class="btn btn-lg btn-info btn-block">I want to Work</button>
				</div>
				</div>
				</div>
				<div class="col-md-6">
					{!! HTML::Image("img/apps.png","Coordinae developer",array("class"=>'img-responsive')) !!}
				</div>
				</div>
				<div> <!-- /container -->
			</div>
		
	</div>
	</section>

<section class="freelancer">
	<div class="container section-padding">
	<div class="row">
		
			<div class="col-lg-12">
				
				<div class="row">
				<div class="col-md-6">
				<h3><span class="heading-note">Eearn more mony!</h3>
				<h4>get projects done in a good time and get a good review!</h4>
				<h4>Project Done!</h4>
				<h4>Progressing in your Busniess!</h4>
				<div class="row">
				<div class="col-md-12 botton-padding">
				<button type="button" class="btn btn-lg btn-info btn-block">I want to Work</button>
				</div>
				
				</div>
				</div>
				<div class="col-md-6">
					{!! HTML::Image("img/apps.png","Coordinae developer",array("class"=>'img-responsive')) !!}
				</div>
				
				<div> <!-- /container -->
			</div>
		</div>
	</div>
	</section>
	

@stop


