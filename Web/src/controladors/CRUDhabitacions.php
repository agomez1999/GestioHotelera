<?php

function ctrlCrudHabitacions($peticio, $resposta, $contenidor)
{
    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $llistaHabitacions = $habitacions->selectAll();
    $llistaHabitacionsTipus = $habitacions->selectRoomType();

    $resposta->set('llistaHabitacions', $llistaHabitacions);
    $resposta->set('llistaHabitacionsTipus', $llistaHabitacionsTipus);

    $resposta->SetTemplate("CRUDhabitacions.php");
    return $resposta;
}