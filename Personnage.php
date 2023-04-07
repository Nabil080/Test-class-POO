<?php
require_once('FireMage.php');
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

}
?>