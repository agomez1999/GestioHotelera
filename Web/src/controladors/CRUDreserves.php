<?php

function ctrlCrudReserves($peticio, $resposta, $contenidor)
{

    $reserves = new \Daw\ReservesPDO($contenidor->config["db"]);

    $llistaReserves = $reserves->selectAll();

    $resposta->set('llistaReserves', $llistaReserves);

    $resposta->SetTemplate("CRUDreserves.php");
    return $resposta;
}