<?php
// CONTROLADOR PER REGISTRAR UN NOU USUARI
function ctrlDoSignup($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "usrname");
    $pass = $peticio->get(INPUT_POST, "passwd");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $consulta = $usuaris->insert($usuari,$pass);

    $resposta->redirect("location: index.php");
    
    return $resposta;
}
?>