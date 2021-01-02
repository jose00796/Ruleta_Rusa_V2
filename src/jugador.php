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
}
