<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza Food</title>
		
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		
        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/site.css')}} " type="text/css"/>
		
    </head>
    <body>
		<img id="dely_body_img" src="{{asset('img/pizza_caixa.jpg')}}"/>
		<div id="dely_container" class="container">	
			<div>
				<div id="dely_delivery">
					<span>Delivery</span>
				</div>
				<div id="dely_bg_image_logo" class="float-right">
					<img class="rounded-circle" src="{{asset('img/logo_bg_white.png')}}" />
				</div>				
			</div>
			<div>
				<div id="dely_bg_image_casa">
					<img class="rounded" src="{{asset('img/icon_casa.png')}}" />
				</div>
			</div>
			<div>
				<form>
					<div class="form-group">
						<input class="text-center form-control"  type="text" name="cep" placeholder="DIGITE SEU CEP"/>
						<input class="text-center form-control btn" type="submit" name="buscar" value="BUSCAR"/>
					</div>
				</form>
			</div>
		</div>
		
    </body>
</html>
