<?php
require_once('food.php');
require_once('drink.php');

$juice = new Drink('JUICE', 600,'アイス');
$coffee = new Drink('COFFEE', 500,'ホット');
$curry = new Food('CURRY', 900,3);
$pasta = new Food('PASTA', 1200,1);



$menus = array($juice, $coffee, $curry, $pasta);

?>