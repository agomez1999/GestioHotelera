<?php
// CONTROLADOR PER EDITAR UNA RESERVA
function ctrlmEditReserva($peticio, $resposta, $contenidor)
{
    $Id = $peticio->get(INPUT_POST, "Id");
    $Arrivada = $peticio->get(INPUT_POST, "Arrivada");
    $Sortida = $peticio->get(INPUT_POST, "Sortida");
    $Persones = $peticio->get(INPUT_POST, "Persones");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);

    $consulta = $reserva->update($Id, $Arrivada, $Sortida, $Persones, $Tipo);

    $resposta->redirect("location: index.php?r=CRUDreserves");
    
    return $resposta;
}
?>