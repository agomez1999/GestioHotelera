<?php

function ctrlDeleteRoomType($peticio, $resposta, $contenidor)
{
    $Numero = $peticio->get(INPUT_GET, "id");
    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
    $habitacions->deleteRoomType($Numero);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
