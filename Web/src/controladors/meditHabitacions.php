<?php

function ctrlmEditHabitacions($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_POST, "id");
    $tipo = $peticio->get(INPUT_POST, "tipo");
    $nom = $peticio->get(INPUT_POST, "nom");
    $quantitat = $peticio->get(INPUT_POST, "quantitat");
    $descripcio = $peticio->get(INPUT_POST, "descripcio");
    $img1 = $peticio->get(INPUT_POST, "img1");
    $img2 = $peticio->get(INPUT_POST, "img2");
    $img3 = $peticio->get(INPUT_POST, "img3");
    $preu = $peticio->get(INPUT_POST, "preu");

    $usuaris = new \Daw\RoomsPDO($contenidor->config["db"]);

    $consulta = $habitacions->update($id, $tipo, $nom, $quantitat, $descripcio, $img1, $img2, $img3, $preu);

    $resposta->redirect("location: index.php?r=CRUHabitacions");
    
    return $resposta;
}
?>