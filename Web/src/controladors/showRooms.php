<?php

function ctrlshowRoom($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $habitacio = new \Daw\RoomsPDO($contenidor->config["db"]);
    $llistaHabitacions = $habitacio->selectRoomByType($id);
    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("showRoom.php");
    return $resposta;
}

?>