<?php

namespace Emeset;

class Contenidor
{
    public $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function resposta(){
        return new \Emeset\Resposta();
    }

    public function peticio(){
        return new \Emeset\Peticio();
    }

}

?>