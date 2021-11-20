<?php
// CONTROLADOR PER EDITAR UN TIPO D'HABITACIÓ
function ctrlmEditRoomType($peticio, $resposta, $contenidor)
{
    $Numero = $peticio->get(INPUT_POST, "Numero");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");
    $nOcupants = $peticio->get(INPUT_POST, "nOcupants");
    $Metres = $peticio->get(INPUT_POST, "Metres");
    $Preu = $peticio->get(INPUT_POST, "Preu");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $consulta = $habitacions->updateRoomType($Numero, $Tipo, $nOcupants, $Metres, $Preu);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
?>