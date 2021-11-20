<?php
// CONTROLADOR PER EDITAR UNA HABITACIÓ
function ctrlEdithabitacions($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");

    $habitacio = new \Daw\RoomsPDO($contenidor->config["db"]);
    $llistaHabitacions = $habitacio->getRoomById($id);
    $resposta->set('llistaHabitacions', $llistaHabitacions);

    $resposta->SetTemplate("editRoom.php");
    return $resposta;
}

?>