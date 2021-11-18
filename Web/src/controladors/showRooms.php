<?php

function ctrlshowRoom($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $dA = $peticio->get(INPUT_GET, "dA");
    $dS = $peticio->get(INPUT_GET, "dS");

    $resposta->setSession("Tipo",$id);

    $habitacio = new \Daw\RoomsPDO($contenidor->config["db"]);
    $llistaHabitacions = $habitacio->selectRoomByType($id);
    $resposta->set('llistaHabitacions', $llistaHabitacions);
    $resposta->set('dA', $dA);
    $resposta->set('dS', $dS);

    $resposta->SetTemplate("showRoom.php");
    return $resposta;
}

?>