@extends('layouts.site')

@section('body')

	<div id="delivery-body" class="d-flex">
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
				
			<div class="row h-50 justify-content-center align-items-center">
					<div class="col-12 h-50 logo-delivery">
						<div class="d-flex justify-content-center">
							<img class="icon_casa" src="{{ asset('img/icon_casa.png')  }}" />
						</div>
					</div>

					<div class="col-12 h-50">
						<form class="m-auto">
							<div class="form-group">
								<input class="text-center form-control" type="text" name="cep" placeholder="DIGITE SEU CEP">
								<input class="text-center form-control btn" type="submit" name="buscar" value="BUSCAR">
							</div>
						</form>
					</div>
			
			</div>

		</div>
	</div>
@endsection

