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

    public function Disparar(revolver $arma)
    {
        $arma->Disparar();
        
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
}
