<?php
// CONTROLADOR PER EDITAR UN USUARI
function ctrlmEditUser($peticio, $resposta, $contenidor)
{
    $id = $peticio->get(INPUT_POST, "id");
    $usuari = $peticio->get(INPUT_POST, "usrname");
    $pass = $peticio->get(INPUT_POST, "passwd");
    $rol = $peticio->get(INPUT_POST, "rol");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $consulta = $usuaris->update($id, $usuari, $pass, $rol);

    $resposta->redirect("location: index.php?r=CRUDusuaris");
    
    return $resposta;
}
?>