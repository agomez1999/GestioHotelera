<?php

function ctrlDeleteReservaUser($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);
    $reserva->delete($id);
    $resposta->redirect("location: index.php?r=veureReserva");
    
    return $resposta;
}
