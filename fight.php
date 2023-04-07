<?php
/**
 * La fonction fight prends en paramètres les deux joueurs qui doivent se battrent
 * @param Personnage $playerr1
 * @param Personnage $playyerr2
 */
function fight($playerr1,$playerr2){
    // echo'<div class="flex flex-col align-center">';
$first = rand(0,5);
$fire = 0;
if($first==1){$player1 = $playerr1; $player2=$playerr2;}else{$player1 = $playerr2; $player2 = $playerr1;}
    for($i=$player2->pointDeVie, $x=$player1->pointDeVie; $i>0 AND $x>0; $i=$player2->pointDeVie, $x=$player1->pointDeVie){
    $dodge_p1= rand(0,5);
    $dodge_p2= rand(0,5);
    $rand = rand(0,5);
    if($rand==3){$fire=3;}
        echo $player1->name.' attaque '.$player2->name.' !<br>';
    if($dodge_p2!=5){
        echo $player1->name.' inflige ! <span class="red">'.$player1->dmg.'</span> points de dégats !<br>';
        $player2->pointDeVie -= $player1->dmg;
    }else{
        echo $player2->name.' a <span class="green">esquivé</span> le coup !<br>';
    }
    // if($fire > 0){
    // echo $player2->name.' brûle ! -'.$fire.'hp ! <br> ';
    // $fire -= 1;}
    if($player2->pointDeVie > 0){echo $player2->name.' a <span class="green">'.$player2->pointDeVie.'</span> hp restants !<br><br>';}
    elseif($player2->pointDeVie <= 0){echo $player2->name.' est <span class="text-red-500 font-bold"> MORT </span> !<br><br>';}

// ----------------------------
    if($player2->pointDeVie>0){
        echo $player2->name.' rétorque !<br>';
        if($dodge_p1!=1){
            echo $player2->name.' inflige ! <span class="red">'.$player2->dmg.'</span> points de dégats !<br>';
            $player1->pointDeVie -= $player2->dmg;
        }else{
            echo $player1->name.' a <span class="green">esquivé</span> le coup !<br>';
        }
            // var_dump($fire);
        if($fire > 0){
            echo $player1->name.'<span class="text-red-500"> brûle ! -'.$fire.'hp ! </span> <br> ';
            $player1->pointDeVie -= $fire;
            $fire -= 1;}
            // var_dump($fire);
        if($player1->pointDeVie >0){echo $player1->name.' a <span class="green">'.$player1->pointDeVie.'</span> hp restants !<br><br>';}
        elseif($player1->pointDeVie <= 0){echo $player1->name.' est <span class="text-red-500 font-bold"> MORT </span> !<br><br>';}
    }
    echo '------------------------------------------<br><br>';

    if($player2->pointDeVie<=0){
        echo '<h2 class=" animate-bounce w-full text-center text-2xl text-red mb-4">'.$player1->name.' a gagné le combat !</h2>';
        // $player2->level = 2;
        // $player2 = new Personnage('Nabil',100,10,'Rogue',$player2->level);
    }
    if($player1->pointDeVie<=0){
        echo '<h2 class=" animate-bounce w-full text-center text-2xl text-red mb-4">'.$player2->name.' a gagné le combat !</h2>';
        // $player1->level = 2;
        // $player2 = new Personnage('Nabil',100,10,'Rogue',$player2->level);

    };
}
    // echo'</div>';
}
?>