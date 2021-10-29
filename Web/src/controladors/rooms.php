<?php

function ctrlRooms($peticio, $resposta, $contenidor)
{

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $llistaHabitacions = $habitacions->selectAll();

    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("rooms.php");
    return $resposta;
}

?>