<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $llistaHabitacions = $habitacions->selectAllRooms();

    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>