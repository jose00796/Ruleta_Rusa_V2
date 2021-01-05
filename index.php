<?php

//REVISA GUAPO QUE HAY UNA VAINA RARA POR AHI... 

spl_autoload_register(function($classname){
            if (file_exists("src/$classname.php")) {
                require "src/$classname.php";
            }
});

$player = new juego();
$arma = new revolver();

$lista = $player->GetJugadores();

echo "<h1> LISTA DE JUGADORES</h1>";

foreach ($lista as $player) {
    echo "<p>{$player->GetId()} - {$player->GetName()} <hr>";
}


foreach ($lista as $player) {
    $player->Disparar($arma);
    $player->partida();
}