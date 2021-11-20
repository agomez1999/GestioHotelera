<?php
// CONTROLADOR PER EDITAR UNA RESERVA
function ctrlEditReserva($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);
    $llistaReserves = $reserva->getReservaById($id);
    $resposta->set('llistaReserves', $llistaReserves);

    $resposta->SetTemplate("editReserva.php");
    return $resposta;
}

?>