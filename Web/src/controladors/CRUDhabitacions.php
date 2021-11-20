<?php
// CONTROLADOR PER AGAFAR DADES DEL CRUD D'HABITACIONS I REENVIAR-TE A LA SEVA PÀGINA
function ctrlCrudHabitacions($peticio, $resposta, $contenidor)
{
    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
    // CRIDA DE FUNCIONS PER AGAFAR LES DADES DE LES HABITACIONS
    $llistaHabitacions = $habitacions->selectAll();
    $llistaHabitacionsTipus = $habitacions->selectRoomType();

    $resposta->set('llistaHabitacions', $llistaHabitacions);
    $resposta->set('llistaHabitacionsTipus', $llistaHabitacionsTipus);

    $resposta->SetTemplate("CRUDhabitacions.php");
    return $resposta;
}