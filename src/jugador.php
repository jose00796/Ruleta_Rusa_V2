<?php

class jugador
{
    protected $id;
    protected $name;
    protected $alive = true;
    
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetId()
    {
        return $this->id;
    }

    public function Disparar(revolver $arma)
    {
        $arma->Disparar();
        echo "<p>El Wuebon {$this->GetName()} se Dispara a si mismo";

        if ($arma->GetAcierto() == true) {
            $this->muerte();
        }
    }

    public function muerte()
    {
        return $this->alive = false;
    }

    public function GetEstado()
    {
        return $this->alive;
    }

    public function partida()
    {
        if ($this->GetEstado() == false) {
            echo "<p>El Wuebon {$this->GetName()} Ha Muerto, Triste, GRACIAS POR JUGAR";
            $this->endgame();
        }
    }

    public function endgame()
    {
        exit();
    }
}
