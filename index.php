<?php

spl_autoload_register(function($classname){
            if (file_exists("src/$classname.php")) {
                require "src/$classname.php";
            }
});

$p = new revolver();

for ($i=0; $i < 4; $i++) { 
    $p->Disparar();
}