<?php
require_once('FireMage.php');
require_once('Rogue.php');
// Créer la classe "Personnage"
class Personnage
// implements FireMage
{
    // Définition des propriétés (variables/constantes)
    public $name;
    public $pointDeVie;
    public $dmg;
    public $skills = [];
    public $level;
    public $class;

    // Définitions des méthodes (fonctions)
    public function __construct($name,$pointDeVie,$dmg,$level,$class)
    {
        $this->name = $name;
        $this->pointDeVie = $pointDeVie;
        $this->dmg = $dmg;
        $this->level= $level;
        $this->class= $class;
        $this->skills []= 'dodge';
        $this->skills []= 'crit';
    }

    public function toString()
    {
        echo 'Nom : '.$this->name.'<br>';
        echo 'Hp : '.$this->pointDeVie.'<br>';
        echo 'Dmg : '.$this->dmg.'<br>';
        echo 'Lvl : '.$this->level.'<br>';
        echo 'Class : '.$this->class.'<br>';
        echo 'Compétences : ';
        foreach($this->skills as $skill){
            echo $skill.', ';
        }
    }

    public function engage($player)
    {
        echo '<span class="text-red-500">!!</span> '.$this->name.' engage le combat contre '.$player->name.' <span class="text-red-500">!!</span><br>';
        echo $this->name.' inflige ! <span class="red">'.$this->dmg.'</span> points de dégats !<br>';
        echo '------------------<br>';
    }

    public function takes($player)
    {
        $this->pointDeVie -= $player->dmg;
        echo $this->name.' a <span class="green">'.$this->pointDeVie.'</span> hp restants !<br>';
        echo '------------------<br>';
    }

    public function attack($player)
    {
        echo $this->name.' rétorque !<br>';
        echo $this->name.' inflige ! <span class="red">'.$this->dmg.'</span> points de dégats !<br>';
        echo '------------------<br>';
    }
}
?>