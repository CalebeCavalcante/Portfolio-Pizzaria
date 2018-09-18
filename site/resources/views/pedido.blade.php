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
		<link rel="stylesheet" href="{{ asset('css/pedido.css')}} " type="text/css"/>
		
    </head>
    <body>
		<img id="img_background" src="{{asset('img/pizza_prato.jpg')}}"/>
		<div class="container">	
			<div class="row">
				<div class="col-6">
					<div id="delivery">
						<span>PEÇA AGORA</span>
					</div>
				</div>
				<div class="col-6">
					<div id="logo_pizzafood" class="float-right">
						<img class="rounded-circle" src="{{asset('img/logo_bg_white.png')}}" />
					</div>
				</div>				
			</div>
			<div class="row">
				<div id="bg_image_casa">
					<img class="rounded" src="{{asset('img/icon_casa.png')}}" />
					<div class="element svg" style="width: 87px; height: 97px; transform: translate(270px, -99px); opacity: 1;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 588.32 650.32" style="position: absolute;">
 <defs>
  <filter id="CANVA2_d">
   <feGaussianBlur in="SourceGraphic" stdDeviation="0.9"></feGaussianBlur>
  </filter>
  <linearGradient id="CANVA2_c" x1=".94948" x2="-.000006" y1=".49367" y2=".49998">
   <stop offset="0" stop-color="#888"></stop>
   <stop offset="1" stop-color="#333"></stop>
  </linearGradient>
 </defs>
 <g><rect fill="#666666" height="213.36" transform="matrix(1.5281 0 0 1.5281 53.876 -43.819)" width="311.08" x="2.1474" y="184.7" class="color color-1" data-color="#cccccf"></rect></g>
 <g><rect fill="#000000" height="198.7" stroke-width="48" transform="matrix(1.5812 0 0 1.5281 53.839 -43.819)" width="298.05" x="2.0119" y="199.41" class="color color-2" data-color="#bfbfbf"></rect></g>
 <g><rect fill="#666666" filter="url(#CANVA2_d)" height="129.48" stroke-width="0" transform="matrix(1.5281 0 0 1.5281 53.876 -43.819)" width="65.962" x="59.036" y="260.51" class="color color-3" data-color="#7f7f7f"></rect></g>
 <rect fill="url(#CANVA2_c)" height="62.391" opacity=".75" transform="matrix(1.5281 0 0 1.5281 53.876 -43.819)" width="129.5" x="147.24" y="258.77"></rect>
 <g><path d="m60.15 199.96v84.334c0 14.999 12.078 27.077 27.077 27.077h10.267c12.362 0 22.759-8.2018 26.026-19.484 3.2708 11.276 13.573 19.484 25.931 19.484h10.267c12.358 0 22.708-8.2077 25.978-19.484 3.267 11.282 13.617 19.484 25.978 19.484h10.267c11.661 0 21.531-7.3231 25.358-17.621 3.8223 10.306 13.69 17.621 25.358 17.621h10.267c11.06 0 20.525-6.5822 24.737-16.046 4.212 9.4633 13.677 16.046 24.737 16.046h10.267c10.087 0 18.836-5.4701 23.495-13.61 4.6604 8.137 13.41 13.61 23.495 13.61h10.267c9.25 0 17.373-4.6124 22.254-11.652 4.8821 7.0266 12.966 11.652 22.206 11.652h10.267c8.1531 0 15.435-3.5974 20.391-9.2643 4.956 5.667 12.238 9.2643 20.391 9.2643h10.267c14.999 0 27.077-12.078 27.077-27.077v-84.334h-472.62z" fill="#666666" class="color color-3" data-color="#7f7f7f"></path></g>
 <g fill="inherit" transform="matrix(1.5281 0 0 1.1956 53.876 75.824)" class="color color-4" data-color="#ff7f00">
  <path d="m306.44 10.734v151.47c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.815 0 17.719-7.9038 17.719-17.719v-9.8125l-43.125-141.66z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m52.819 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6562c9.8149 0 17.719-7.9038 17.719-17.719v-154.44h-43.094z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m10.319 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.8149 0 17.719-7.9038 17.719-17.719v-154.44h-43.125z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m95.288 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.8149 0 17.719-7.9038 17.719-17.719v-154.44h-43.125z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m137.16 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6562c9.815 0 17.719-7.9038 17.719-17.719v-154.44h-43.094z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m180.26 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.815 0 17.719-7.9038 17.719-17.719v-154.44h-43.125z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m221.85 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.8149 0 17.719-7.9038 17.719-17.719v-154.44h-43.125z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m264.6 7.7647v154.44c0 9.815 7.9038 17.719 17.719 17.719h7.6875c9.815 0 17.688-7.9038 17.688-17.719v-154.44h-43.094z" fill="inherit" class="color color-4" data-color="inherit"></path>
  <path d="m9.1943 7.7647l-41.969 136.12v18.312c0 9.815 7.9038 17.719 17.719 17.719h7.6562c9.8149 0 17.719-7.9038 17.719-17.719v-154.44h-1.125z" fill="inherit" class="color color-4" data-color="inherit"></path>
 </g>
 <g><rect fill="#666666" height="19.544" transform="matrix(1.5281 0 0 1.5281 53.876 -43.819)" width="300.54" x="7.6334" y="63.804" class="color color-3" data-color="#7f7f7f"></rect></g>
 <g><rect fill="#000000" height="0" stroke-width="48" width="514.97" x="-240.77" y="453.47" class="color color-2" data-color="#bfbfbf"></rect></g>
</svg></div>
				</div>
			</div>
			<div class="row">
				<div id="links">
					<ul  class="nav">
						<li class="nav-item"><a href="{{ route('delivery') }}" class="nav-link" >DELIVERY</a></li>
						<li class="nav-item"><a href="{{ route('loja') }}" class="nav-link">RETIRAR NA LOJA</a></li>
					</ul>
				</div>
			</div>
		</div>
		
    </body>
</html>
