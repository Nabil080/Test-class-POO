<?php session_start();
// session_destroy();
require_once('Personnage.php');
require_once('fight.php');
// if(!isset($player1_level)){
//     $player1_level = 1;
// }
// if(!isset($player2_level)){
//     $player2_level = 1;
// }
$player1 = new Personnage('Nabil',100,10,'Rogue',1);
$_SESSION['player1'] = $player1;
$player2 = new Personnage ('Ziad',50,20,'MageFire',1);
$_SESSION['player2'] = $player2;
// var_dump($_SESSION);
// var_dump($player1);
// var_dump($player2);
?>

<div class="flex gap-10 mb-4 justify-center">
    <div class="border p-4 h-fit">
    <?php $player1->toString();?>
    </div>
    <div class="border p-4 h-fit">
    <?php $player2->toString();?>
    </div>
</div>
<?php
fight($player1,$player2);

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-400 w-fit mx-auto text-center">
    <style>
        body{
            padding: 1rem;
        }
        .red{
            color:blue;
        }
        .green{
            color:greenyellow
        };
    </style>
</body>
</html>