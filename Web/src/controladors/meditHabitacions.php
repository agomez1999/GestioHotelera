<?php

function ctrlmEdithabitacions($peticio, $resposta, $contenidor)
{
    $Numero = $peticio->get(INPUT_POST, "Numero");
    $Tipo = $peticio->get(INPUT_POST, "Tipo");
    $Descripcio = $peticio->get(INPUT_POST, "Descripcio");
    $Serveis = $peticio->get(INPUT_POST, "Serveis");
    $Imatge1 = $peticio->get(INPUT_POST, "Imatge1");
    $Imatge2 = $peticio->get(INPUT_POST, "Imatge2");
    $Imatge3 = $peticio->get(INPUT_POST, "Imatge3");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $consulta = $habitacions->update($Numero, $Tipo, $Descripcio, $Serveis, $Imatge1, $Imatge2, $Imatge3);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
?>