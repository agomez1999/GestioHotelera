<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    if ($persones == 1 || $persones == 2) { // CAS 1 i 2 PERSONES
        
        $tipo = $habitacions->getRooms();
        $Dispo = array();
        $Disponibles = [];
        foreach ($tipo as $actual) {
            $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);

            if ($Dispo["Reserves"] < $actual["Num"]) {
                $Disponibles[] = $actual;
            }
        }
    } else if ($persones == 3 || $persones == 4) {
        $nReserves = $habitacions->selectIndividualDispoRoom();
        $nReserves = $nReserves["Reserves"];
        if($nReserves < 3) {
            $llistaHabitacions = $habitacions->selectDoubleRoom();
            $resposta->set('llistaHabitacions', $llistaHabitacions);
        } else {
            $resposta->setSession("Missatge", "No hi ha cap habitació disponible en aquestes dates.");
        }
    }

    $resposta->set('Disponibles', $Disponibles);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>