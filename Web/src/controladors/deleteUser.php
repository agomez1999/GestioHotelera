<?php

function ctrlDeleteUser($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_GET, "id");
    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);
    $usuaris->delete($id);

    $resposta->redirect("location: index.php?r=CRUDusuaris");
    
    return $resposta;
}
