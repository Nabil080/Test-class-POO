<?php
/**
 * La fonction fight prends en paramètres les deux joueurs qui doivent se battrent
 * @param Personnage $player1
 * @param Personnage $player2
 */
function fight($player1,$player2){
    // echo'<div class="flex flex-col align-center">';
$first = rand(0,1);
$fire = 0;
if($first==1){$temp1 = $player1; $player1=$player2; $player2 = $temp1;}
    for($i=$player2->pointDeVie, $x=$player1->pointDeVie; $i>0 AND $x>0; $i=$player2->pointDeVie, $x=$player1->pointDeVie){
    if(in_array("dodge",$player1->skills)){$dodge_p1= rand(0,5);}
    if(in_array("dodge",$player1->skills)){$dodge_p2= rand(0,5);}
    if(in_array("crit",$player1->skills)){$crit_p1= rand(0,8);}
    if(in_array("crit",$player2->skills)){$crit_p2= rand(0,8);}
    $rand = rand(0,3);
    $player1->dmg = rand($player1->dmg- 2, $player1->dmg + 2);
    $player2->dmg = rand($player2->dmg- 2, $player2->dmg + 2);
    if($rand==3){$fire=3;}
        echo $player1->name.' attaque '.$player2->name.' !<br>';
    if(isset($dodge_p2) && $dodge_p2==0){
        echo $player2->name.' a <span class="green">esquivé</span> le coup !<br>';
    }else{
        if(isset($crit_p1) && $crit_p1==0){
            echo '<span class="text-red-500">COUP CRITIQUE</span> ! '. $player1->name.' inflige ! <span class="red">'.$player1->dmg * 1.5.'</span> points de dégats !<br>';
            $player2->pointDeVie -= $player1->dmg * 1.5;
        }else{
            echo $player1->name.' inflige ! <span class="red">'.$player1->dmg.'</span> points de dégats !<br>';
            $player2->pointDeVie -= $player1->dmg;
        }
    }
    if(in_array('fire',$player1->skills) && $fire > 0){
        echo $player2->name.'<span class="text-red-500"> brûle ! -'.$fire.'hp ! </span> <br> ';
        $player2->pointDeVie -= $fire;
        $fire -= 1;}

    if($player2->pointDeVie > 0){echo $player2->name.' a <span class="green">'.$player2->pointDeVie.'</span> hp restants !<br><br>';}
    elseif($player2->pointDeVie <= 0){echo $player2->name.' est <span class="text-red-500 font-bold"> MORT </span> !<br><br>';}

// ----------------------------
    if($player2->pointDeVie>0){
        echo $player2->name.' rétorque !<br>';
        if(isset($dodge_p1) && $dodge_p1==0){
            echo $player1->name.' a <span class="green">esquivé</span> le coup !<br>';
        }else{
            if(isset($crit_p2) && $crit_p2==0){
                echo '<span class="text-red-500">COUP CRITIQUE</span> ! '. $player2->name.' inflige ! <span class="red">'.$player2->dmg * 1.5.'</span> points de dégats !<br>';
                $player1->pointDeVie -= $player2->dmg * 1.5;
            }else{
                echo $player2->name.' inflige ! <span class="red">'.$player2->dmg.'</span> points de dégats !<br>';
                $player1->pointDeVie -= $player2->dmg;
            }
        }
            // var_dump($fire);
            // var_dump ($player2->skills);
            // var_dump ($player1->skills);
        if(in_array('fire',$player2->skills) && $fire > 0){
            echo $player1->name.'<span class="text-red-500"> brûle ! -'.$fire.'hp ! </span> <br> ';
            $player1->pointDeVie -= $fire;
            $fire -= 1;}
            // var_dump($fire);
        if($player1->pointDeVie >0)
        {
            echo $player1->name.' a <span class="green">'.$player1->pointDeVie.'</span> hp restants !<br><br>';
        }
        elseif($player1->pointDeVie <= 0)
        {
            echo $player1->name.' est <span class="text-red-500 font-bold"> MORT </span> !<br><br>';
        }
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