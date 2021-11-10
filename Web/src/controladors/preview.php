<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
    
    if ($persones == 1) { // CAS 1 PERSONA
        $nReserves = $habitacions->selectIndividualDispoRoom();
        $nReserves = $nReserves["Reserves"];
        if($nReserves < 3) { // COMPROVAR SI HI HA HABITACIONS LLIURES
            $llistaHabitacions = $habitacions->selectIndividualRoom(); // MOSTRAR HABITACIONS DISPONIBLES
            $resposta->set('llistaHabitacions', $llistaHabitacions);
        } else {
            $resposta->setSession("Missatge", "No hi ha cap habitació disponible en aquestes dates."); // MISSATGE EN CAS DE NO QUEDAR HABITACIONS
        }
    } else if ($persones == 2) { // CAS 2 PERSONES
        $_nReservesI = $habitacions->selectIndividualDispoRoom();
        $nReservesI = $_nReservesI["Reserves"];
        $_nReservesD = $habitacions->selectDoubleDispoRoom();
        $nReservesD = $_nReservesD["Reserves"];
        $_nReservesDV = $habitacions->selectDoubleViewsDispoRoom();
        $nReservesDV = $_nReservesDV["Reserves"];
        if($nReservesI < 3) { // COMPROVAR SI HI HA HABITACIONS INDIVIDUALS LLIURES
            $llistaHabitacionsI = $habitacions->selectIndividualRoom();
        } else if ($nReservesD < 3){ // COMPROVAR SI HI HA HABITACIONS DOBLES LLIURES
            $llistaHabitacionsD = $habitacions->selectDoubleRoom();
        } else if ($nReservesDV < 3) { // COMPROVAR SI HI HA HABITACIONS DOBLES AMB VISTES LLIURES
            $llistaHabitacionsDV = $habitacions->selectDoubleViewsRoom();
        } else {
            $resposta->setSession("Missatge", "No hi ha cap habitació disponible en aquestes dates."); // MISSATGE EN CAS DE NO QUEDAR HABITACIONS
        }
        $llistaHabitacions = array_merge($llistaHabitacionsI, $llistaHabitacionsD, $llistaHabitacionsDV); // AJUNTEM TOTES LES HABITACIONS A UN MATEIX ARRAY
        $resposta->set('llistaHabitacions', $llistaHabitacions);
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