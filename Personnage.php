<?php
require_once('MageFire.php');
// Créer la classe "Personnage"
class Personnage implements MageFire
{
    // Définition des propriétés (variables/constantes)
    public $name;
    public $pointDeVie;
    public $dmg;
    public $class;
    public $level;

    // Définitions des méthodes (fonctions)
    public function __construct($name,$pointDeVie,$dmg,$class,$level)
    {
        $this->name = $name;
        $this->pointDeVie = $pointDeVie;
        $this->dmg = $dmg;
        $this->class= $class;
        $this->level= $level;
    }

    public function toString()
    {
        echo 'Nom : '.$this->name.'<br>';
        echo 'Hp : '.$this->pointDeVie.'<br>';
        echo 'Dmg : '.$this->dmg.'<br>';
        echo 'Lvl : '.$this->level.'<br>';
        echo 'Class : '.$this->class.'<br>';
    }
}
?>