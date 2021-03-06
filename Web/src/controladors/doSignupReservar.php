<?php
// CONTROLADOR PER REGISTRAR UN NOU USUARI QUAN S'ESTÀ FENT UNA RESERVA.
function ctrlDoSignupReservar($peticio, $resposta, $contenidor)
{
    $usuari = $peticio->get(INPUT_POST, "usrname");
    $pass = $peticio->get(INPUT_POST, "passwd");

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $consulta = $usuaris->insert($usuari,$pass);
    $actual = $usuaris->getUser($usuari);

    if($actual && $actual["contrasenya"] === $pass) {
        $resposta->setSession("logat", true);
        $resposta->setSession("login", $actual);
        $resposta->redirect("location: index.php?r=finalForm");
    } else {
        $resposta->setSession("logat", false);
        $resposta->redirect("location: index.php?r=loginReservar");
    }
    
    return $resposta;
}
?>