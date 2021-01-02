<?php

class revolver
{
    protected $bala;
    protected $posicion = 0;
    protected $acierto = false;

    public function __construct()
    {
        $this->ColocarBala();
    }

    public function ColocarBala()
    {
        $this->bala = rand(0,4);
    }

    public function GetBala()
    {
        return $this->bala;
    }

    public function GetPosicion()
    {
        return $this->posicion;
    }

    public function GetAcierto()
    {
        return $this->acierto;
    }

    public function Disparar()
    {
        if ($this->GetBala() == $this->GetPosicion()) {
            $this->acierto = true;
        }else {
            $this->SiguienteBala();
        }
    }

    public function SiguienteBala()
    {
        $this->posicion = $this->posicion + 1;
    }
}
