@extends('layouts.site')

@section('body')
 
	<div id="pedido-body" class="d-flex">
		<div class="fullscreen-content absolute">
			<div class="h-100">
				<img class="fullscreen-img" src="{{ asset('img/pizza_prato.jpg')  }}" />
			</div> 
		</div>
		<div class="bg-opaco m-auto container">
			
				<div class="row h-50">
					<div class="col-6 peca-agora">
						<div>
							<img src="{{ asset('img/icon_forma_red.png') }}">
							<span class="text-white text-right mx-auto">PEÇA AGORA</span>
						</div>
					</div>
					<div class="col-6 logo-white">
						<div class="my-1 d-flex justify-content-end">
							<img src="{{ asset('img/logo_bg_white.png') }}">
						</div>
					</div>
				</div>
				<div class="row h-50">
					<div class="col-6 logo-delivery">
						<div class="d-flex justify-content-center">
							<img src="{{ asset('img/icon_casa.png') }}">
						</div>
						<div>
							<p class="text-center">
								<a class="text-dark" href="{{ route('delivery') }}">DELIVERY</a>
							</p>
						</div>	
					</div>
					<div class="col-6 logo-delivery">
						<div class="d-flex justify-content-center">
							<img src="{{ asset('img/icon_loja.png') }}">
						</div>
						<div>
							<p class="text-center">
								<a class="text-dark" href="{{ route('loja') }}">RETIRE NA LOJA</a>
							</p>
						</div>
					</div>
				</div>
			
		</div>
	</div>		

@endsection
