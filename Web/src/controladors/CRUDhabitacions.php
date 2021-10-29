<?php

function ctrlCrudHabitacions($peticio, $resposta, $contenidor)
{

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);

    $llistaHabitacions = $habitacions->selectAll();

    $resposta->set('llistaHabitacions', $llistaHabitacions);

    if (isset($_SESSION["login"])) {
        if ($_SESSION["login"]["rol"] == 1)
            $resposta->SetTemplate("CRUDhabitacions.php");
            return $resposta;
    } else {
        $resposta->redirect("location: index.php?r=login");
    }

    
}