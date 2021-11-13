<?php

function ctrlEditRoomType($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");

    $Habitacio = new \Daw\RoomsPDO($contenidor->config["db"]);
    $llistaHabitacions = $Habitacio->getRoomTypeById($id);
    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("editRoomType.php");
    return $resposta;
}

?>