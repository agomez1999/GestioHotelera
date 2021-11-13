<?php

function ctrlEditUser($peticio, $resposta, $contenidor)
{

    $id = $peticio->get(INPUT_GET, "id");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);
    $llistaUsuaris = $usuaris->getUserById($id);
    $resposta->set('llistaUsuaris', $llistaUsuaris);

    $resposta->SetTemplate("editUser.php");
    return $resposta;
}

?>