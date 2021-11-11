<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
        
        $tipo = $habitacions->getRooms();
        $Dispo = array();
        $Disponibles = [];

        foreach ($tipo as $actual) {
            $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
            if ($Dispo["Reserves"] < $actual["Num"] && $actual["nOcupants"] >= $persones) {
                    $Disponibles[] = $actual;
            }
        }

    $resposta->set('Disponibles', $Disponibles);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>