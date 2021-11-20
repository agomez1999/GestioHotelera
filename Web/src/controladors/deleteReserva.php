<?php
// CONTROLADOR PER ELIMINAR UNA RESERVA
function ctrlDeleteReserva($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);
    $reserva->delete($id);

    $resposta->redirect("location: index.php?r=CRUDreserves");
    
    return $resposta;
}
