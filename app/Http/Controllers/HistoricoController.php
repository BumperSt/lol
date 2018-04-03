<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function index(Request $request, $nome)
    {
    $win = array();
   	$chave = "RGAPI-12b2e3fb-4638-458e-a914-c9b4010e838c";
   	$partiid = array();
  	$item = array();
  	$loser = array();
  	$itemname = array();
  	$iditem = array();
  	$partida = array();
  	$item = array(); 
  	$item0 = array(); 
  	$item1 = array(); 
  	$item2 = array(); 
  	$item3 = array(); 
  	$item4 = array(); 
  	$item5 = array();
  	$item6 = array();
  	$feitiço1 = array();
  	$feitiço2 = array();
  	$gametype = array();
  	$duration = array();
  	$totalminions = array();
  	$gameduration = array();
  	$minionsmin = array();
//============================================================LOOPS/PARA/PEGAR/INFORMAÇÕES===========================
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 48, 50, 51, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 67, 68, 69, 72, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 89, 90, 91, 92, 96, 98, 99, 101, 102, 103, 104, 105, 106, 107, 110, 111, 112, 113, 114, 115, 117, 119, 120, 121, 122, 126, 127, 131, 133, 134, 136, 141, 142, 143, 150, 154, 157, 161, 163, 164, 201, 202, 203, 222, 223, 236, 238, 240, 245, 254, 266, 267, 268, 412, 420, 421, 427, 429, 432, 497, 498, 516 );
	$arr1 = array('Annie', 'Olaf', 'Galio', 'TwistedFate', 'XinZ hao', 'Urgot', 'Leblanc', 'Vladimir', 'Fiddlesticks', 'Kayle', 'MasterYi', 'Alistar', 'Ryze', 'Sion', 'Sivir', 'Soraka', 'Teemo', 'Tristana', 'Warwick', 'Nunu', 'MissFortune', 'Ashe', 'Tryndamere', 'Jax', 'Morgana', 'Zilean', 'Singed', 'Evelynn', 'Twitch', 'Karthus', 'Chogath', 'Amumu', 'Rammus', 'Anivia', 'Shaco', 'DrMundo', 'Sona', 'Kassadin', 'Irelia', 'Janna', 'Gankplank', 'Corki', 'Karma', 'Taric', 'Veigar', 'Trundle', 'Swain', 'Caitlyn', 'Blitzcracnk', 'Malphite', 'Katarina', 'Nocturne', 'Maokai', 'Renekton', 'JarvanIV', 'Elise', 'Orianna', 'Wukong', 'Brand', 'LeeSin', 'Vayne', 'Rumble', 'Cassiopeia', 'Skarner', 'Heimerding', 'Nasus', 'Nidalee', 'Udyr', 'Poppy', 'Gragas', 'Pantheon', 'Ezreal', 'Morderkaiser', 'Yorick', 'Akali', 'Kennen', 'Garen', 'Leona', 'Malzahar', 'Talon', 'Riven', 'KogMaw', 'Shen', 'Lux', 'Xerath', 'Shyvana', 'Ahri', 'Graves', 'Fizz','Volibear', 'Rengar', 'Varus', 'Nautilus', 'Viktor', 'Sejuani', 'Fiora', 'Ziggs', 'Lulu', 'Draven', 'Hecarim', 'Khazix', 'Darius', 'Jayce', 'Lissandra', 'Diana', 'Quinn', 'Syndra', 'AurelionSol', 'Kayn','Zoe', 'Zyra', 'Gnar', 'Zac', 'Yasuo', 'VelKoz', 'Taliyah', 'Camille', 'Braum', 'Jhin', 'Kindred', 'Jinx', 'TahmKench', 'Lucian', 'Zed', 'Kled', 'Ekko', 'Vi', 'Aatrox', 'Nami', 'Azir', 'Theresh', 'Illaoi', 'RekSai', 'Ivern', 'Kalista', 'Bard', 'Rakan', 'Xayah', 'Ornn');
	$idmap = array(70, 72, 73, 75, 76, 78, 83, 96, 98, 100, 300, 310, 313, 317, 318, 325, 400, 420, 430, 450, 460, 470, 600, 610, 800, 810, 820, 830, 840, 850, 940, 950, 960, 980, 990, 1000, 1010, 1020);
	$mapname = array('NormalGame', 'Aram', 'Aram', 'Urf', 'Todos por um', 'BotUrf', 'Assenção', 'HexaKill', 'Aram', 'ReiPoro', 'Nemises', '(Lutadores do Mercado Negro', 'Definitivamente não é Dominion', 'Urf', 'NormalGame', 'Normal(Alternada)', 'Normal(AsCegas)', 'Solo/Duo', 'Flex', 'Aram', '3v3(AsCegas)', '3v3(Ranked)', 'Lua Sangrenta', 'Estrela Negra', '3v3(Bot)', '3v3(Bot)', '3v3(Bot)', 'Normal(Bot)', 'Normal(Bot)', 'Normal(Bot)', 'Cerco ao Nexus', 'Capeteemo', 'Capeteemo', 'Invasão', 'Invasão', 'Sobre Carga', 'Urf', 'Todos Por Um');
	$idspeel = array(21, 30, 39, 9, 12, 35, 4, 32, 7, 13, 31, 11, 33, 34, 3, 14, 6);
	$namespeel = array('Barrier', 'PoroRecall', 'SnowURFSnowball_Mark', 'Boost', 'Teleport','DarkStarChampSelect1', 'Flash', 'SnowBall','Heal', 'Mana', 'PoroThrow', 'Smite', 'SiegeChampSelect1', 'SiegeChampSelect2', 'Exhaust', 'Dot', 'Haste');
//==============================================================================================================
    	$conta = "https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/$nome?api_key=$chave";
    	$conrq = file_get_contents($conta);
		$contarqu = json_decode($conrq);
		$acid = $contarqu->accountId;
//==============================================================================================================]
		$champid = array();
		$champname = array();
		$fila = array();
		$lane = array();
		$filaname = array();
		$his = "https://br1.api.riotgames.com/lol/match/v3/matchlists/by-account/$acid?api_key=$chave";
		$hisget = file_get_contents($his);
		$hisdecod = json_decode($hisget);
		$partidas = $hisdecod->matches;
		$tam = $hisdecod->startIndex;
		$tam1 = $hisdecod->endIndex;
		$tam1 -= 1;
		$tam1 = 10;	
		for($tam; $tam <=$tam1; $tam++){
			$champid[] = $partidas[$tam]->champion;
			$fila[] = $partidas[$tam]->queue;
			$lane[] = $partidas[$tam]->lane;
			$partida[] = $partidas[$tam]->gameId;
			if ($lane[$tam] == "JUNGLE"){
				$lane[$tam] = "JG";
			}
			else if  ($lane[$tam] == "BOTTOM"){
				$lane[$tam] = "BOT";
			}
		}
		$y = 0;
		$tamarraychamp = count($arr)-1;
		while ($y<=$tam1) {
				for($z=0;$z<=$tamarraychamp;$z++)
				{
					if($arr[$z]==$champid[$y])
					{
						$champname[] = $arr1[$z];	
					}
				}
			$y++;
		}
//================================================Historico=====================================================
		$x = 0;
		$f = 0;
		for ($f; $f <= $tam1; $f++){
			$histo = "https://br1.api.riotgames.com/lol/match/v3/matches/$partida[$f]?api_key=$chave";
			$histoget = file_get_contents($histo);
			$histodecod = json_decode($histoget);
				while ($x <= 9){
					$decodhistoid = $histodecod->participantIdentities[$x]->player->accountId;
						if ($decodhistoid == $acid){
							$partiid[] = $histodecod->participantIdentities[$x]->participantId;
							$idhisto = $x;
						}
					$x++;
				}
			$x = 0;
			$win[] = $histodecod->participants[$idhisto]->stats->win;//DECOD WIN
			$kill[] = $histodecod->participants[$idhisto]->stats->kills;
			$deaths[] = $histodecod->participants[$idhisto]->stats->deaths;
			$assists[] = $histodecod->participants[$idhisto]->stats->assists;
			$item[] = $histodecod->participants[$idhisto]->stats->item0;
			$item1[] = $histodecod->participants[$idhisto]->stats->item1;
			$item2[] = $histodecod->participants[$idhisto]->stats->item2;
			$item3[] = $histodecod->participants[$idhisto]->stats->item3;
			$item4[] = $histodecod->participants[$idhisto]->stats->item4;
			$item5[] = $histodecod->participants[$idhisto]->stats->item5;
			$item6[] = $histodecod->participants[$idhisto]->stats->item6;
			$spell1[] = $histodecod->participants[$idhisto]->spell1Id;
			$spell2[] = $histodecod->participants[$idhisto]->spell2Id;
			$duration[] = $histodecod->gameDuration;
			$totalminions[] = $histodecod->participants[$idhisto]->stats->totalMinionsKilled;
//============================================================LOOPS/PARA/PEGAR/INFORMAÇÕES===========================
			$gameduration[] = $duration[$f]/60;
			$minionsmin[] = ($totalminions[$f]/$gameduration[$f]);
			while ($x <= 16) {
				if ($spell1[$f] == $idspeel[$x]){
					$feitiço1[] = $namespeel[$x];
				}
				if ($spell2[$f] == $idspeel[$x]){
					$feitiço2[] = $namespeel[$x];
				}
				$x++;
			}
			$x = 0;
			$idmaptam = count($idmap)-1;
			while($x <= $idmaptam){
				if ($fila[$f] == $idmap[$x]){
					$gametype[] = $mapname[$x] ;
				}
				$x++;
			}
		if ($duration[$f] > 300){
				if ($win[$f] == true){
					$loser[] = "#277A33";
				}
				elseif ($win[$f] == false){
					$loser[] = "#BB2516";
				}
				$x = 0;
			}
		else{
			$loser[] = "rgba(131,118,117,0.3);";
			$gametype[$f] = "Remake";
		}
	}
	$version = "8.7.1";
    	return view('historico', ['nome'=>$nome, 'champ'=>$champname, 'gametype'=>$gametype, 'lane'=>$lane,'version'=>$version,'tam'=>$tam, 'win'=>$loser, 'kill'=>$kill, 'dead'=>$deaths, 'assis'=>$assists, 'item0'=>$item,'item1'=>$item1,'item2'=>$item2,'item3'=>$item3,'item4'=>$item4,'item5'=>$item5,'item6'=>$item6,'feitiço1'=>$feitiço1,'feitiço2'=>$feitiço2,'gameduration'=>$gameduration, 'minionskill'=>$totalminions,'minionsmin'=>$minionsmin]);
    }
}
