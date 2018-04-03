@extends('layouts.master')

@section('content')
@section('title')
	<title>{{$nome}}</title>
@endsection
<body class="scroll">
@for ($i = 0; $i < $tam; $i++)

<div  class="histo" style="background-color: {{$win[$i]}};">
	    <div>
			<h5 class="text-center">{{$gametype[$i]}}</h5>
			<h5 style="text-align: center;">{{$champ[$i]}}</h5>
	    </div>
	    <div>
			  <div class="circleb">
			        <div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/{{$champ[$i]}}.png');">
			        </div>
			   </div>
			   <div class="circlem" style="margin-top: -80px; margin-left: 8px;">
					<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/spell/Summoner{{$feitiço1[$i]}}.png');">
					</div>
			   </div>
			   <div class="circlem" style="margin-top: 20px; margin-left: 18px;">
			   		<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/spell/Summoner{{$feitiço2[$i]}}.png');">
					</div>
			   </div>
			   <div class="circlem" style="margin-top: -100px; margin-left: 168px;">
					<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/Zac.png');">
					</div>
			   </div>
			   <div class="circlem" style="margin-top: 20px; margin-left: 158px;">
			   		<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/champion/Zac.png');">
					</div>
			   </div>
		</div>
		<div>
			<h3 class="text-center">{{$kill[$i]}}/{{$dead[$i]}}/{{$assis[$i]}}</h3>
		</div>
		<div>
			<div class="slot-itens" style="margin-left: 10%;">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item0[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item1[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item2[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item6[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens" style="margin-left: 19%;">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item3[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item4[$i]}}.png');">
				</div>
			</div>
			<div class="slot-itens">
				<div class="circle" style="background-image: url('http://ddragon.leagueoflegends.com/cdn/{{$version}}/img/item/{{$item5[$i]}}.png');">
				</div>
			</div>
		</div>

</div>
@endfor
</body>
@endsection