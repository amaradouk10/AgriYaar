<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ in_array(app()->getLocale(), ['ar', 'az', 'dv', 'fa', 'he', 'ku', 'ur']) ? 'rtl' : 'ltr' }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('aimeos_header')

	<title>{{ config('app.name', 'Aimeos') }}</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css">

	<style>
		body { color: #000; color: var(--ai-primary, #000); background-color: #fff; background-color: var(--ai-bg, #fff); }
		.navbar { color: #555; color: var(--ai-primary-alt, #555) }
		.navbar a, .navbar a:before, .navbar span, footer a { color: #555 !important; color: var(--ai-primary-alt, #555) !important; }
		.content { margin: 0 5% } .catalog-stage-image { margin: 0 -5.55% }
		footer { color: #555; color: var(--ai-primary-alt, #555); background-color: #f8f8f8; background-color: var(--ai-bg-alt, #f8f8f8); }
		.sm { display: inline-block } .sm:before { font: normal normal normal 14px/1 FontAwesome; padding: 0 0.2em; font-size: 225% }
		.facebook:before { content: "\f082" } .twitter:before { content: "\f081" } .instagram:before { content: "\f16d" } .youtube:before { content: "\f167" }
	</style>
	<link type="text/css" rel="stylesheet" href="{{ asset(config( 'shop.client.html.common.template.baseurl', 'packages/aimeos/shop/themes/elegance' ) . '/aimeos.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="aimeos">
	<nav class="navbar navbar-expand-md navbar-light">
		<a class="navbar-brand" href="/">
			<img src="{{asset('img/logofilrouge.png')}}"  title="Aimeos Logo">
		</a>
        <form action="{{ route('products.search')}}" class="search">
            <input  type="text" name="query" >
            <button type="submit">
                <img src="{{asset('img/search.png')}}" alt="">
            </button>
       </form>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				@if (Auth::guest() && config('app.shop_registration'))
					<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
				@endif
				@if (Auth::guest())
					<li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><img src="{{asset('img/user.svg')}}" alt=""width="40px"  height="50px"></a></li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{asset('img/user.svg')}}" alt=""width="40px"  height="50px"><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							@if (config('app.shop_registration'))
								<li><a class="nav-link" href="{{ route('aimeos_shop_admin') }}" title="{{ __('Merchant') }}">{{ __('Merchant') }}</a></li>
							@endif
							<li><a class="nav-link" href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="{{ __('Profile') }}">{{ __('Profile') }}</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a class="nav-link" href="javascript: document.getElementById('logout').submit();">{{ __('Logout') }}</a></li>
						</ul>
					</li>
				@endif
			</ul>
			@yield('aimeos_head')
		</div>
	</nav>
	 <div class="content">
		@yield('aimeos_stage')
		@yield('aimeos_nav')
	    @yield('aimeos_body')
    	@yield('aimeos_aside')
		@yield('content')
	</div>
    <footer class="footer-distributed section">

        <div class="footer-left">

            <h3><img src="{{asset('img/logofilrouge.png')}}"  height="140px"></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                <a href="#">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
            </p>

            <p class="footer-company-name">AgriYaar © 2021</p>

            <div class="footer-icons m-3">

                <a href="#"><img src="{{asset('img/facbook.png')}}"  width="30px" height="30px"></a>
                <a href="#"><img src="{{asset('img/github.png')}}"  width="30px" height="30px"></a>

            </div>

        </div>

        <div class="footer-right">

            <p>Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/bootstrap@4"></script>
	@yield('aimeos_scripts')
	</body>
</html>
{{-- @extends('base')
@section('content')
@endsection --}}
