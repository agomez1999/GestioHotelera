<?php

function ctrlmEditRoomType($peticio, $resposta, $contenidor)
{
    $Numero = $peticio->get(INPUT_POST, "Numero");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");
    $Preu = $peticio->get(INPUT_POST, "Preu");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $consulta = $habitacions->updateRoomType($Numero, $Tipo, $Preu);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
?>