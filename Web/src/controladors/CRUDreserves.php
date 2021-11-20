<?php
// CONTROLADOR PER AGAFAR DADES DEL CRUD DE RESERVES I REENVIAR-TE A LA SEVA PÀGINA
function ctrlCrudReserves($peticio, $resposta, $contenidor)
{

    $reserves = new \Daw\ReservesPDO($contenidor->config["db"]);
    // CRIDA DE FUNCIONS PER AGAFAR LES DADES DE LES RESERVES
    $llistaReserves = $reserves->selectAll();

    $resposta->set('llistaReserves', $llistaReserves);

    $resposta->SetTemplate("CRUDreserves.php");
    return $resposta;
}