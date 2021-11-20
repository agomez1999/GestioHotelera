<?php
// CONTROLADOR PER ELIMINAR UNA HABITACIÓ
function ctrlDeleteHabitacions($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
    $habitacions->delete($id);

    $resposta->redirect("location: index.php?r=CRUDhabitacions");
    
    return $resposta;
}
