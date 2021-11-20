<?php
// CONTROLADOR PER REENVIAR A LA PÀGINA DE LOGIN
function ctrlLogin($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("login.php");
    return $resposta;
}

?>