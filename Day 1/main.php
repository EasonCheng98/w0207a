<?php
include "Game.php";
include "Animal.php";
include "Rabbit.php";
include "Tortoise.php";

$rabbit = new Rabbit("Rabbit"); // 实现class为Rabbit 并赋予名字为Rabbit 
$tortoise = new Tortoise("Tortoise");// 实现class为TortoiseTortoise 

$game = new Game(); // 实现class为Game
$game->register($rabbit); //把$rabbit的资料 丢去$game里的register（）
$game->register($tortoise);//把$tortoise的资料 丢去$game里的register（）

$game->getTheSpeed(); // get $rabbit和$tortoise  的 speed
$game->result(); // compare $rabbit和$tortoise  的 speed 谁大
$game->report(); //  查看 $rabbit和$tortoise  的 speed 为多少
?>