<?php
// CONTROLADOR PER CREAR UN NOU TIPUS D'HABITACIÓ
function ctrlmNewRoomType($peticio, $resposta, $contenidor)
{
    $Numero = $peticio->get(INPUT_POST, "Numero");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");
    $nOcupants = $peticio->get(INPUT_POST, "nOcupants");
    $Metres = $peticio->get(INPUT_POST, "Metres");
    $Preu = $peticio->get(INPUT_POST, "Preu");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $consulta = $habitacions->insertRoomType($Numero, $Tipo, $nOcupants, $Metres, $Preu);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
?>