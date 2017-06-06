<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	
		<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	
	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>
	<!-- /theme JS files -->
	
	<script type="text/javascript" src="{{asset('assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
  	<script type="text/javascript" src="{{asset('assets/js/pages/components_popups.js')}}"></script>

	@yield('js_css')
	
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="{{asset('./assets/images/logo_light.png')}}" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('./assets/images/placeholder.jpg')}}" alt="">
							<span>{{Auth::user()->nom }} {{Auth::user()->prenom }}</span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#"><i class="icon-user-plus"></i> Profile</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Logout</a></li>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{asset('./assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">{{Auth::user()->nom }} {{Auth::user()->prenom }}</span>
									<div class="text-size-mini text-muted">
										@if (Auth::user()->typeUser == 0)
											Administareur
										@endif
										@if (Auth::user()->typeUser == 1)
											Commerciale
										@endif
										@if (Auth::user()->typeUser == 2)
											Préstataire
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Navigation</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="{{ url('/Commerciales') }}"><i class="fa fa-home"></i> <span>Acceuil</span></a></li>

								<li>
									<a href=""><i class="fa fa-sitemap"></i> <span>Équipe</span></a>
								</li>

								<li>
									<a href=""><i class="fa fa-users"></i> <span class="nav-label">Clients </span></a>
								</li>

								<li>
									<a href=""><i class="fa fa-table"></i> <span class="nav-label">Produits</span></a>
								</li>

								<li>
									<a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label">Commandes</span></a>
								</li>

								<li>
									<a href="#"><i class="fa fa-money"></i> <span class="nav-label">Solde </span><span class="fa arrow"></span></a>

									<ul class="nav nav-second-level collapse">
										<li><a href="">Mon Solde</a></li>
										<li><a href="">Historique</a></li>
										<li><a href="{{ url('/Commerciales/DemandesRetrait') }}">Demande Retrait</a></li>
									</ul>

								</li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header" style="margin: 5px 2px 5px 2px;">
					<div class="page-header-content" >
					</div>

					<div class="breadcrumb-line breadcrumb-line-component">
						<ul class="breadcrumb">
							<li><a href="{{ url('/Commerciales') }}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="#">@yield('path1')</a></li>
							<li class="active">@yield('path2')</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Contenue -->
						@yield('content')
					<!-- /Contenue -->
					
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#" target="_blank">Maghreb-SI</a> by <a href="#">BENSTITOU Anas</a> &amp <a href="#">ERROUISSI Mustapha</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	@yield('script_footer')

</body>
</html>
