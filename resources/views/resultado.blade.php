@extends('layouts.master')

@section('content')
@section('title')
	<title>{{$nome}}</title>
@endsection
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand"><font color="white">{{$nome}}</font> </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	     <li class="nav-item">
	        <a class="nav-link" href="hist/{{$nome}}"><font color="white">Historico</font></a>
	    </ul>
	    <form action="user" method="GET" class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Nick..." aria-label="Search" name="nick">
	      <button class="btn btn-primary btn-lg my-2 my-sm-0" type="submit">Demacia</button>
	    </form>
	  </div>
	</nav>
		<h1 class="Audiowide text-center text-danger maior">  {{$nome}} </h1>
		<h2 class= "Audiowide  text-center menor"> Nivel: {{$level}} </h2>
	<img src= "http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/profileicon/{{$icon}}.png" alt="Responsive image" class= "img-thumbnail face" >
<!--==========================================MAESTRIAS=====================================-->
	@if ($top2 != "Off")
<div style="position:absolute; right:10%; top:40%">
	<figure>
	<img src= http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/{{$top2}}.png class="img-responsive">
	<figcaption class="text-center">{{$top2}}</figcaption>
	</figure>
</div>
	@endif
	@if ($top1 != "Off")
<div style="position:absolute; right:20%; top:34%;">
	<figure>
	<img src= http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/{{$top1}}.png class="img-responsive">
	<figcaption class="text-center">{{$top1}}</figcaption>
	</figure> 
</div>
	@endif
	@if ($top3 != "Off") 
<div  style="position:absolute; right:30%; top:40%">
	<figure>
	<img src= http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/{{$top3}}.png class="img-responsive">
	<figcaption class="text-center">{{$top3}}</figcaption>
	</figure>
</div>
	@endif
<!--============================================Solo/Duo=================================-->
@if ($elo != "Off")
	<div style="position: absolute; right: 75%; top: 74%;">
		<h2 class="Audiowide text-center menor"> Solo/Duo </h2>
	</div>
	<div style="position: absolute; right: 75%; top: 80%;">
		<h2 class="Audiowide text-center menor"> {{$elo}} {{$rank}} </h2>
		<h2 class="Audiowide text-center menor"> <font color="#0093BF">{{$wins}}V</font>&nbsp;<font color="#EC363C">{{$loser}}D</font></h2>
		<h2 class="Audiowide text-center menor"> Taxa de Vitória: <font color="{{$cor}}">{{$rate}}%</font></h2>
	</div>
	<img src={{$eloimg}} width="10%" alt="Responsive" style="position:absolute; right:63%; top:76%;"  >
	<div style="position: absolute; right: 57%; top: 83%;">
		<h2 class="Audiowide text-center menor"> Pdl: {{$pdl}} </h2>
	</div>
@endif
<!--============================================Flex=====================================-->
@if ($elof != "Off")
	<div style="position: absolute; right: 30%; top: 74%;">
		<h2 class="Audiowide text-center menor"> Flex </h2>
	</div>
	<div style="position: absolute; right: 30%; top: 80%;">
		<h2 class="Audiowide text-center menor"> {{$elof}} {{$rankf}} </h2>
		<h2 class="Audiowide text-center menor"> <font color="#0093BF">{{$winsf}}V</font>&nbsp;<font color="#EC363C">{{$loserf}}D</font></h2>
		<h2 class="Audiowide text-center menor"> Taxa de Vitória: <font color="{{$corf}}">{{$ratef}}%</font></h2>
	</div>
	<img src={{$eloimgf}} width="10%" alt="Responsive" style="position:absolute; right:18%; top:76%;"  >
	<div style="position: absolute; right: 12%; top: 83%;">
		<h2 class="Audiowide text-center menor"> Pdl: {{$pdlf}} </h2>
	</div>
@endif
@endsection
