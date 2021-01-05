<?php

//REVISA GUAPO QUE HAY UNA VAINA RARA POR AHI... 
//LISTO GALAN, TODO FUE UNA TONTERIA, ME GUSTA MAS LA LOGICA DE AQUI QUE EN LA ORIGINAL...
//HICISTE QUE LA VERSION ORIGINAL PARECIERA UNA PIRATA JAJAJA... 

spl_autoload_register(function($classname){
            if (file_exists("src/$classname.php")) {
                require "src/$classname.php";
            }
});

$player = new juego();
$arma = new revolver();

Log::SetLogger(new Html_Logger);

$lista = $player->GetJugadores();

Log::Info("<h1> LISTA DE JUGADORES</h1>");

foreach ($lista as $player) {
    Log::Info("<p>{$player->GetId()} - {$player->GetName()} <hr>");
}


foreach ($lista as $player) {
    $player->Disparar($arma);
    $player->partida();
}