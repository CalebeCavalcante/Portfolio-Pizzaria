@extends('layouts.site')

@section('body')

	<div id="pedido-body" class="fullscreen-content d-flex justify-content-center align-items-center">
		<div class="fullscreen-content absolute">
			<div class="h-100">
				<img class="fullscreen-img" src="{{ asset('img/pizza_prato.jpg')  }}" />
			</div> 
		</div>
		<div class="bg-opaco">
			<div class="row w-100 h-100">
				<div class="col-12">
						<div class="row h-100">
							<div class="col-6 d-flex align-items-star justify-content-start">
								<div id="peca-agora" class="my-0 mx-auto h-50 d-flex justify-content-center align-items-center">
									<span class="text-white mx-2 p-2">PEÇA AGORA</span>
								</div>
								<div class="h-75 my-0 d-flex justify-content-center aling-items-center">
									<img class="h-100 w-100" src="{{ asset('img/icon_forma_red.png') }}">
								</div>
							</div>
							<div class="col-6 d-flex align-items-star justify-content-end">
								<div id="logo-white" class="h-75 w-75 my-3 d-flex justify-content-center">
									<img src="{{ asset('img/logo_bg_white.png')  }}" />
								</div>
							</div>								
						</div>	
				</div>
				<div class="col-12 d-flex justify-content-center">

					<div class="h-100 w-75 d-flex align-items-center justify-content-center">
						<div class="row h-100 justify-content-center">
							<div class="col-6" >
								<div class="row h-100">
									<div class="col-12 h-75 d-flex align-items-center justify-content-center">
										<div class="h-100 w-50 d-flex align-items-center justify-content-center">
											<img class="logo-delivery" src="{{ asset('img/icon_casa.png')  }}" />
										</div>
									</div>
									<div class="col-12 h-25 text-center text-dark">
										<p><a href="{{ route('delivery') }}" >DELIVERY</a></p>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row h-100">
									<div class="col-12 h-75 d-flex align-items-center justify-content-center">
										<div class="h-100 w-50 d-flex align-items-center justify-content-center">
											<img class="logo-delivery" src="{{ asset('img/icon_loja.png')  }}" />
										</div>		
									</div>
									<div class="col-12 h-25 text-center text-dark">
										<p><a href="{{ route('loja') }}">RETIRE NA LOJA</a></p>
									</div>
								</div>
							</div>				
						</div>
					</div>

				</div>
			</div>
		</div>		
	</div>		

@endsection
