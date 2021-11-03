<?php

function ctrlCloseSession($peticio, $resposta, $contenidor)
{

    session_destroy();

    $resposta->SetTemplate("portada.php");

    return $resposta;
}

?>