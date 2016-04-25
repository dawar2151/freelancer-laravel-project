<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@yield('head')

		{!! HTML::style('bootflat/css/bootstrap.min.css') !!}
		{!! HTML::style('bootflat/bootflat/css/bootflat.min.css') !!}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		{!! HTML::style('css/main_front.css') !!}

		<!--[if (lt IE 9) & (!IEMobile)]>
			{!! HTML::script('js/vendor/respond.min.js') !!}
		<![endif]-->
		<!--[if lt IE 9]>
			{!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
			{!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		<![endif]-->

		{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
		{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}

	</head>

  <body>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header role="banner">

<div class="container-fuild">
    <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::to('/')}}">{{ trans('front/site.title') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <!--
						<li {!! classActivePath('/') !!}>
							{!! link_to('/', trans('front/site.home')) !!}
						</li>
						
						@if(session('statut') == 'visitor' || session('statut') == 'user')
							<li {!! classActivePath('contact/create') !!}>
								{!! link_to('contact/create', trans('front/site.contact')) !!}
							</li>
						@endif
						<li {!! classActiveSegment(1, ['articles', 'blog']) !!}>
							{!! link_to('articles', trans('front/site.blog')) !!}
						</li>
						@if(Request::is('auth/register'))
							<li class="active">
								{!! link_to('auth/register', trans('front/site.register')) !!}
							</li>
						@elseif(Request::is('password/email'))
							<li class="active">
								{!! link_to('password/email', trans('front/site.forget-password')) !!}
							</li>
						@else
							@if(session('statut') == 'visitor')
								<li {!! classActivePath('auth/login') !!}>
									{!! link_to('auth/login', trans('front/site.connection')) !!}
								</li>
							@else
								@if(session('statut') == 'admin')
									<li>
										{!! link_to_route('admin', trans('front/site.administration')) !!}
									</li>
								@elseif(session('statut') == 'redac') 
									<li>
										{!! link_to('blog', trans('front/site.redaction')) !!}
									</li>
								@endif
								<li>
									{!! link_to('auth/logout', trans('front/site.logout')) !!}
								</li>
							@endif
						@endif
						-->
						
						
						
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Post project</a></li> 
          
           				@if(empty(session('statut')) || session('statut') == 'visitor')
						<li {!! classActivePath('auth/login') !!}>
									{!! link_to('auth/login', trans('front/site.connection')) !!}
						</li>
						@if(Request::is('auth/register'))
							<li class="active">
								{!! link_to('auth/register', trans('front/site.register')) !!}
							</li>
						@else
							<li>
								{!! link_to('auth/register', trans('front/site.register')) !!}
							</li>
						@endif	
						@else
						<li><a class="popoverData" href="#" data-content="Default balance..." rel="popover" data-placement="bottom" data-original-title="Current amount..." data-trigger="hover">{{ auth()->user()->amount_by_hour }}.00  <i class="fa fa-usd"></i></a></li>
						<li><a class="popoverData" href="#" data-content="Coming Soon..." rel="popover" data-placement="bottom" data-original-title="Chat" data-trigger="hover"><i class="fa fa-weixin"></i></a></li>
						<li><a class="popoverData" href="#" data-content="Coming Soon..." rel="popover" data-placement="bottom" data-original-title="Current projects..." data-trigger="hover"><i class="fa fa-product-hunt"></i></a></li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">{!! HTML::image(auth()->user()->img,auth()->user()->username,array('class'=>'front-img-small')) !!}  <i class="fa fa-sort-desc"></i></a>
							<ul class="dropdown-menu">
									
								<li>
									{!! link_to('auth/logout', trans('front/site.logout')) !!}
								</li>
								<li>
									{!! link_to('user/profile', trans('front/site.profile')) !!}
								</li>
									
							
							</ul>
						</li>
						@endif
						
						
						</ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </div>
		@yield('header')	
	</header>

	<main role="main">
		<div class="boxSe container">
		@if(session()->has('ok'))
			@include('partials/error', ['type' => 'success', 'message' => session('ok')])
		@endif	
		@if(isset($info))
			@include('partials/error', ['type' => 'info', 'message' => $info])
		@endif
		</div>
		@yield('main')
	</main>

	<footer class="footer" style="background-color:#434a54">
		 @yield('footer')
		 <!-- Footer

      ================================================== -->
      <div class="container">
		 	<div class="row"><div class="col-md-12">
		 		<div class="clearfix">
		 		<div class="footer-logo"><a href="#">Coordinate</a></div>
                  <dl class="footer-nav">
                    <dt class="nav-title">PORTFOLIO</dt>
                    <dd class="nav-item"><a href="#">Web Design</a></dd>
                    <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
                    <dd class="nav-item"><a href="#">Mobile Design</a></dd>
                    <dd class="nav-item"><a href="#">Print</a></dd>
                    <dd class="nav-item"><a href="#">User Interface</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">ABOUT</dt>
                    <dd class="nav-item"><a href="#">The Company</a></dd>
                    <dd class="nav-item"><a href="#">History</a></dd>
                    <dd class="nav-item"><a href="#">Vision</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">GALLERY</dt>
                    <dd class="nav-item"><a href="#">Flickr</a></dd>
                    <dd class="nav-item"><a href="#">Picasa</a></dd>
                    <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
                    <dd class="nav-item"><a href="#">PhotoDune</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">CONTACT</dt>
                    <dd class="nav-item"><a href="#">Basic Info</a></dd>
                    <dd class="nav-item"><a href="#">Map</a></dd>
                    <dd class="nav-item"><a href="#">Conctact Form</a></dd>
                  </dl>
                </div>
                <div class="footer-copyright text-center">Copyright &copy; 2016 Coordinate.All rights reserved.</div>
		 	</div></div>
		 	</div>
		 </div>
      
 
	</footer>
		
	{!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') !!}
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	{!! HTML::script('js/plugins.js') !!}
	{!! HTML::script('js/main.js') !!}

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
			$(function(){
						$('.popoverData').popover();
$('.popoverOption').popover({ trigger: "hover" });
});

	</script>

	@yield('scripts')

  </body>
</html>