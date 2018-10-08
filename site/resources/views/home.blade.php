@extends('layouts.site')

@section('body')
	<div id="home-body">
		<header id="home-header" class="d-flex justify-content-center align-items-end">
			<div class="fullscreen-content absolute">
				<img class="fullscreen-img" src="{{ asset('img/pizza_mesa.jpg')  }}" />
			</div>
			<div class="m-0 p-0">
				<img id="home-logo" src="{{ asset('img/logo_bg_black.png')  }}" />
			</div>
		</header>
		<nav id="home-nav" class="container bg-black">
			<ul class="row justify-content-center">
				<li class="col-sm-3 col-lg-2 text-center">
					<a href="{{ route('pedido') }}" class="text-white">PEÇA AGORA</a>
				</li>
				<li class="col-sm-3 col-lg-2 text-center">
					<a href="#" class="text-red">CARDÁPIO</a>
				</li>
		        <li class="col-sm-3 col-lg-2 text-center d-none d-lg-block"><!-- Meio Vazio para lg-->
		        	<a href="#" class="text-white"></a>
		        </li>
				<li class="col-sm-3 col-lg-2 text-center">
					<a href="#" class="text-red">PROMOÇÕES</a>
				</li>
				<li class="col-sm-3 col-lg-2 text-center">
					<a href="#" class="text-white">QUEM SOMOS</a>
				</li>	
			</ul>
		</nav>
	</div>
@endsection
