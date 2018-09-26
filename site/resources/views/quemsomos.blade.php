@extends('layouts.site')

@section('body')
		<header id="home_header">
			<img src="{{ asset('img/pizza_mesa.jpg')  }}" />
			<div class="d-flex align-items-end justify-content-center" style="height: 100%;">
				<div id="home_icon">
					<img src="{{ asset('img/logo_bg_black.png')  }}" />
				</div>
			</div>
		</header>
		<nav id="home_nav" class="nav justify-content-center">
			<ul class="nav justify-content-between align-items-center">
				<li class="nav-item show"><a href="{{ route('pedido') }}" class="nav-link m-3">PEÇA AGORA</a></li>
				<li class="nav-item orange show"><a href="#" class="nav-link m-3">CARDÁPIO</a></li>
                <li class="nav-item hide"><a href="#" class="nav-link m-3"></a></li><!-- Criar o meio vazio para md lg -->
				<li class="nav-item orange show"><a href="#" class="nav-link m-3">PROMOÇÕES</a></li>
				<li class="nav-item show"><a href="#" class="nav-link m-3">QUEM SOMOS</a></li>	
			</ul>
		</nav>
@endsection