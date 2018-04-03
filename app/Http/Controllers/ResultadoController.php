<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResultadoController extends Controller
{
    public function index(Request $request)
    {
    $chave = "RGAPI-12b2e3fb-4638-458e-a914-c9b4010e838c";
    $atiflex = 0;
    $atisolo = 0;
    $loserf = ''; $winsf = ''; $pdlf = ''; $rankf = ''; $elof = 'Off'; $procerf = ''; $imgf = '';
    $loser = ''; $wins = ''; $pdl = ''; $rank = ''; $elo = 'Off'; $procer = ''; $img = '';
    $top1 = 'Off'; $top2 = 'Off'; $top3 = 'Off';
   	$cor = "#16C309"; $corf = "#16C309";
 	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 48, 50, 51, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 67, 68, 69, 72, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 89, 90, 91, 92, 96, 98, 99, 101, 102, 103, 104, 105, 106, 107, 110, 111, 112, 113, 114, 115, 117, 119, 120, 121, 122, 126, 127, 131, 133, 134, 136, 141, 142, 143, 150, 154, 157, 161, 163, 164, 201, 202, 203, 222, 223, 236, 238, 240, 245, 254, 266, 267, 268, 412, 420, 421, 427, 429, 432, 497, 498, 516 );
	$arr1 = array('Annie', 'Olaf', 'Galio', 'TwistedFate', 'XinZ hao', 'Urgot', 'Leblanc', 'Vladimir', 'Fiddlesticks', 'Kayle', 'MasterYi', 'Alistar', 'Ryze', 'Sion', 'Sivir', 'Soraka', 'Teemo', 'Tristana', 'Warwick', 'Nunu', 'MissFortune', 'Ashe', 'Tryndamere', 'Jax', 'Morgana', 'Zilean', 'Singed', 'Evelynn', 'Twitch', 'Karthus', 'Chogath', 'Amumu', 'Rammus', 'Anivia', 'Shaco', 'DrMundo', 'Sona', 'Kassadin', 'Irelia', 'Janna', 'Gankplank', 'Corki', 'Karma', 'Taric', 'Veigar', 'Trundle', 'Swain', 'Caitlyn', 'Blitzcracnk', 'Malphite', 'Katarina', 'Nocturne', 'Maokai', 'Renekton', 'JarvanIV', 'Elise', 'Orianna', 'Wukong', 'Brand', 'LeeSin', 'Vayne', 'Rumble', 'Cassiopeia', 'Skarner', 'Heimerding', 'Nasus', 'Nidalee', 'Udyr', 'Poppy', 'Gragas', 'Pantheon', 'Ezreal', 'Morderkaiser', 'Yorick', 'Akali', 'Kennen', 'Garen', 'Leona', 'Malzahar', 'Talon', 'Riven', 'KogMaw', 'Shen', 'Lux', 'Xerath', 'Shyvana', 'Ahri', 'Graves', 'Fizz','Volibear', 'Rengar', 'Varus', 'Nautilus', 'Viktor', 'Sejuani', 'Fiora', 'Ziggs', 'Lulu', 'Draven', 'Hecarim', 'Khazix', 'Darius', 'Jayce', 'Lissandra', 'Diana', 'Quinn', 'Syndra', 'AurelionSol', 'Kayn','Zoe', 'Zyra', 'Gnar', 'Zac', 'Yasuo', 'VelKoz', 'Taliyah', 'Camille', 'Braum', 'Jhin', 'Kindred', 'Jinx', 'TahmKench', 'Lucian', 'Zed', 'Kled', 'Ekko', 'Vi', 'Aatrox', 'Nami', 'Azir', 'Theresh', 'Illaoi', 'RekSai', 'Ivern', 'Kalista', 'Bard', 'Rakan', 'Xayah', 'Ornn');
    	$champarray = array();
    	$nick = $request->input('nick');
    	$conta = "https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/$nick?api_key=$chave";
		$jsonid = file_get_contents($conta); //Requisiçaummm
		$decoid = json_decode($jsonid, TRUE); //Decod
		$convid = json_encode($decoid); //Converte
		$arrayid = explode('"', $convid); //Array
		$idd = preg_replace('/[^A-Za-z0-9-]/', '',$arrayid[2]);
		$nome = $id = preg_replace('/[^A-Za-z0-9-]/', '', $arrayid[7]);
		$acid = preg_replace('/[^A-Za-z0-9-]/', '', $arrayid[4]);
		$level = preg_replace('/[^A-Za-z0-9-]/', '', $arrayid[14]);
		$icon = preg_replace('/[^A-Za-z0-9-]/', '', $arrayid[10]);

//==================================================MAESTRIAS===================================================
		$maestria = "https://br1.api.riotgames.com/lol/champion-mastery/v3/champion-masteries/by-summoner/$idd?api_key=$chave";
		$jsonmaestria = file_get_contents($maestria);
		$decomaestria = json_decode($jsonmaestria);
		$tam = count($decomaestria);
		if($tam >= 3){
		$top[] = $decomaestria[0]->championId;
		$top[] = $decomaestria[1]->championId;
		$top[] = $decomaestria[2]->championId;
		$varaux1 = 2;
		}
		elseif ($tam == 0) {
		$varaux1 = 0;
		$top[] = '';
		}
		elseif($tam <= 2){
		$top[] = $decomaestria[0]->championId;
		$top[] = $decomaestria[1]->championId;
		$varaux1 = 1;
		}
		$con = 0;
		while($con<=$varaux1){
			for($z=0;$z<=137;$z++)
				{
					if($arr[$z]==$top[$con])
					{
						$champarray[] = $arr1[$z];	
					}
				}
			$con++;
		}
		if($varaux1 == 2){
		$top1 = $champarray[0];
		$top2 = $champarray[1];
		$top3 = $champarray[2];
		}
		elseif ($varaux1 == 1) {
		$top1 = $champarray[0];
		$top2 = $champarray[1];
		}
		elseif($varaux1 == 0){
		}
//==================================================Rankeada====================================================
		$informa = "https://br1.api.riotgames.com/lol/league/v3/positions/by-summoner/$idd?api_key=$chave";
		$jsoniforma = file_get_contents($informa);
		$decoiforma = json_decode($jsoniforma);
		$infortam =  count($decoiforma);
//=================================================Solo/duo====================================================
		if($infortam >= 1){
		$infotypeleague = $decoiforma[0]->queueType;
		if ($infotypeleague == "RANKED_FLEX_SR"){
	 		$varaux = 1;
	 	}
	 	else{$varaux = 0;}
		$atisolo = 1;
		$wins = $decoiforma[$varaux]->wins;
		$loser = $decoiforma[$varaux]->losses;
		$pdl = $decoiforma[$varaux]->leaguePoints;
		$elo = $decoiforma[$varaux]->tier;
		$rank =  $decoiforma[$varaux]->rank;
		$por = $wins + $loser;
		$procer = ($wins/$por)*100;
		$procer = number_format($procer, 2, ',', ' ');
	}
		 if ($atisolo == 1){
		if ($elo=="BRONZE"){
			$elo="Bronze";
			$eloimg ="/dvqsCm/bronze.png";
		}
		if ($elo=="SILVER"){
			$elo="Prata";
			$eloimg ="/iekaXm/Prata.png";
		}
		if ($elo=="GOLD"){
			$elo="Ouro";
			$eloimg ="/itspsm/Ouro.png";
		}
		if ($elo=="PLATINUM"){
			$elo="Platina";
			$eloimg ="/kvtesm/Platina.png";
		}
		if ($elo=="DIMOND"){
			$elo="Diamante";
			$eloimg ="/mttCCm/Diamante.png";
		}
		$img = "https://image.ibb.co$eloimg";
		if($procer < "50")		
		{
			$cor = "#EC363C";
		}
	}
//====================================================Flex=====================================================
	 	if($infortam >= 2){
	 	$infotypeleague1 = $decoiforma[1]->queueType;
	 	$atiflex = 1;
	 	if ($infotypeleague1 == "RANKED_SOLO_5x5"){
	 		$varaux = 0;
	 	}
	 	else{$varaux = 1;}
		$winsf = $decoiforma[$varaux]->wins;
		$loserf = $decoiforma[$varaux]->losses;
		$pdlf = $decoiforma[$varaux]->leaguePoints;
		$elof = $decoiforma[$varaux]->tier;
		$rankf =  $decoiforma[$varaux]->rank;
		$porf = $winsf + $loserf;
		$procerf = ($winsf/$porf)*100;
		$procerf = number_format($procerf, 2, ',', ' ');
	 }

	if($atiflex == 1){
		if ($elof=="BRONZE"){
			$elof="Bronze";
			$eloimgf ="/dvqsCm/bronze.png";
		}
		if ($elof=="SILVER"){
			$elof="Prata";
			$eloimgf ="/iekaXm/Prata.png";
		}
		if ($elof=="GOLD"){
			$elof="Ouro";
			$eloimgf ="/itspsm/Ouro.png";
		}
		if ($elof=="PLATINUM"){
			$elof="Platina";
			$eloimgf ="/kvtesm/Platina.png";
		}
		if ($elof=="DIMOND"){
			$elof="Diamante";
			$eloimgf ="/mttCCm/Diamante.png";
		}
		$imgf = "https://image.ibb.co$eloimgf";
		if($procerf < "50")		
		{
			$corf = "#EC363C";
		}
	}
	$version = "8.7.1";

		return view('resultado', ['nick'=>$nick, 'saida'=>$id, 'level'=>$level, 'icon'=>$icon, 'nome'=>$nome, 'top1'=>$top1, 'top2'=>$top2, 'top3'=>$top3, 'wins'=>$wins, 'loser'=>$loser, 'elo'=>$elo, 'rate'=>$procer, 'eloimg'=>$img, 'pdl'=>$pdl, 'cor'=>$cor, 'corf'=>$corf, 'version'=>$version, 'winsf'=>$winsf, 'loserf'=>$loserf, 'elof'=>$elof, 'ratef'=>$procerf, 'eloimgf'=>$imgf, 'pdlf'=>$pdlf, 'rank'=>$rank, 'rankf'=>$rankf,'cu'=>$informa]);

		//ID do icon = array[10], level = array[14]
    }
}

