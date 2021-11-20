<?php
// CONTROLADOR PER TANCAR SESSIÓ DE L'USUARI
function ctrlCloseSession($peticio, $resposta, $contenidor)
{

    session_destroy();

    $resposta->redirect("location: index.php");

    return $resposta;
}

?>