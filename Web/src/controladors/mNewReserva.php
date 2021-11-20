<?php
// CONTROLADOR PER CREAR UNA NOVA RESERVA
function ctrlmNewReserva($peticio, $resposta, $contenidor)
{
    $Arrivada = $peticio->get(INPUT_POST, "Arrivada");
    $Sortida = $peticio->get(INPUT_POST, "Sortida");
    $Persones = $peticio->get(INPUT_POST, "Persones");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);

    $consulta = $reserva->insert($Arrivada, $Sortida, $Persones, $Tipo);

    $resposta->redirect("location: index.php?r=CRUDreserves");
    
    return $resposta;
}
?>