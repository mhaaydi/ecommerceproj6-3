
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">

	<link type="text/css" rel="stylesheet" href="{{asset('assets2/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/owl.carousel.min.css') }}">
	<link type="text/css" rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets2/css/slick.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets2/css/slick-theme.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets2/css/nouislider.min.css')}}" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
	@stack('styles')
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu right-menu">
							<ul>
							@if (Route::has('login'))
								@auth
									@if (Auth::user()->utype === 'ADM') 
									<li class="menu-item menu-item-has-children parent" >
										<a title="My account" href="#">Mon compte ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<ul class="submenu curency" >
											<li class="menu-item" >
												<a title="Dashboard" href="{{ route('admin.dashboard') }}">Tableau de bord</a>
											</li>
											<li class="menu-item" >
												<a title="Categories" href="{{ route('admin.categories') }}">Catégories</a>
											</li>
											<li class="menu-item" >
												<a title="Products" href="{{ route('admin.products') }}">Tous les produits</a>
											</li>
											<li class="menu-item" >
												<a title="All Orders" href="{{ route('admin.orders') }}">Tous les commandes</a>
											</li>
											<li class="menu-item" >
												<a title="Manage Home Slider" href="{{ route('admin.homeslider') }}">Gérer le curseur d'accueil</a>
											</li>
											<li class="menu-item" >
												<a title="Manage Home Categories" href="{{ route('admin.homecategories') }}">Gérer le catégories d'accueil</a>
											</li>
											<li class="menu-item" >
												<a title="Sale setting" href="{{ route('admin.sale') }}">Paramètre de vente</a>
											</li>
											<li class="menu-item" >
												<a title="Contact Message" href="{{ route('admin.contact') }}">Message de contact</a>
											</li>
											<li class="menu-item" >
												<a title="Settings" href="{{ route('admin.settings') }}">Les paramètres</a>
											</li>
											<li class="menu-item">
												<a href="{{route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se déconnecter</a>
											</li>
											<form id="logout-form" method="POST" action="{{ route('logout') }}">
												@csrf
											</form>
										</ul>
									</li>
									@else
									<li class="menu-item menu-item-has-children parent" >
										<a title="My account" href="#">Mon compte ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<ul class="submenu curency" >
											<li class="menu-item" >
												<a title="Dashboard" href="{{ route('user.dashboard') }}">Tableau de bord</a>
											</li>
											<li class="menu-item" >
												<a title="My Orders" href="{{ route('user.orders') }}">Mes commandes</a>
											</li>
											<li class="menu-item">
												<a href="{{route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se déconnecter</a>
											</li>
											<form id="logout-form" method="POST" action="{{ route('logout') }}">
												@csrf
											</form>
										</ul>
									</li>
										
									@endif
								@else
								
				
								<li><a href="{{route('login')}}"><i class="fa fa-unlock-alt"></i> Se connecter</a></li>
								<li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> S'inscire</a></li>
								
								</ul>
									@endif
								
							@endif
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{ asset('assets/images/lo.jpg')}}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')
							@livewire('cart-count-component')

							
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/about-us" class="link-term mercado-item-title">A propos de nous</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Achat</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Panier</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Confirmation</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Contactez-nous</a>
								</li>	

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
	{{--<script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>--}}
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/functions.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="{{asset('assets2/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets2/js/slick.min.js')}}"></script>
	<script src="{{asset('assets2/js/nouislider.min.js')}}"></script>
	<script src="{{asset('assets2/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('assets2/js/main.js')}}"></script>
	

	@livewireScripts
	@stack('scripts')

</body>
</html>