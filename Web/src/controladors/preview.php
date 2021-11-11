<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    if ($persones == 1 || $persones == 2) { // CAS 2 PERSONES
        
        $tipo = $habitacions->getType();
        $nTipo = count($tipo);
        $Type = array(); // ARRAY AMB ELS TIPUS DE HABITACIONS
        $Dispo = array();
        $nReserves = array(); // ARRAY AMB EL NUMERO DE RESERVES PER TIPUS D'HABITACIÓ

        for ($i = 1; $i < $nTipo + 1; $i++) {
            $Type[$i] = $tipo[$i]["Tipo"];
            $Dispo[$i] = $habitacions->selectDispoRoom($i);
            $nReserves[$i] = $Dispo[$i]["Reserves"];

            if ($nReserves[$i] < 3) {
                //$llistaHabitacions = $habitacions->selectRoomPreview($i);
                //$resposta->set('llistaHabitacions', $llistaHabitacions);
                echo nl2br("Tipus: " . $i . " disponible \n");
            } else {
                echo nl2br("Tipus: " . $i . " no disponible \n");
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

    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>