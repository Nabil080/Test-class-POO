<?php
require_once('Personnage.php');

Class Rogue extends Personnage
{
    public $dodge = 0.25;

    public function __construct($name,$pointDeVie,$dmg,$level,$class)
    {
        parent:: __construct($name,$pointDeVie,$dmg,$level,$class);
    }

}

?>