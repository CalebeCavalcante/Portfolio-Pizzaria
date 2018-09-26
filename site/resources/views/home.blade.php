@extends('layouts.site')

@section('body')
	<header id="home-header" class="fullscreen-content d-flex justify-content-center align-items-end">
		<div class="fullscreen-content absolute">
			<img class="fullscreen-img" src="{{ asset('img/pizza_mesa.jpg')  }}" />
		</div>
		<div class="m-0 p-0">
			<img id="home-logo" src="{{ asset('img/logo_bg_black.png')  }}" />
		</div>
	</header>
	<nav id="home-nav" class="h-15 d-flex align-items-center fullscreen-content bg-black">
		<ul class="row fullscreen-content justify-content-between align-items-center">
			<li class="col-sm-3 col-lg-2 text-center">
				<a href="{{ route('pedido') }}" class="nav-link text-white">PEÇA AGORA</a>
			</li>
			<li class="col-sm-3 col-lg-2 text-center">
				<a href="#" class="nav-link text-red">CARDÁPIO</a>
			</li>
	        <li class="col-sm-3 col-lg-2 text-center d-none d-lg-block"><!-- Meio Vazio para lg-->
	        	<a href="#" class="nav-link text-white"></a>
	        </li>
			<li class="col-sm-3 col-lg-2 text-center">
				<a href="#" class="nav-link text-red">PROMOÇÕES</a>
			</li>
			<li class="col-sm-3 col-lg-2 text-center">
				<a href="#" class="nav-link text-white">QUEM SOMOS</a>
			</li>	
		</ul>
	</nav>
@endsection
