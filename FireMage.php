<?php

// interface FireMage{


// }

class FireMage extends Personnage {

    public function __construct($name,$pointDeVie,$dmg,$level,$class)
    {
        $this->name = $name;
        $this->pointDeVie = $pointDeVie;
        $this->dmg = $dmg;
        $this->level= $level;
        $this->class= $class;
        $this->skills []= 'dodge';
        $this->skills []= 'crit';
        $this->skills[]= 'fire';
    }
}




?>
