<?php

class juego
{
    public function GetJugadores()
    {
        $lista = array();

        $player = new jugador(1, "Jose");
        array_push($lista, $player);

        $player = new jugador(2, "Eiker");
        array_push($lista, $player);

        $player = new jugador(3, "David");
        array_push($lista, $player);

        $player = new jugador(4, "Pedro");
        array_push($lista, $player);

        $player = new jugador(5, "Victor");
        array_push($lista, $player);

        return $lista;
    }
}
