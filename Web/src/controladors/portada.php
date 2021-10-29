<?php

function ctrlPortada($peticio, $resposta, $contenidor)
{

    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("logat", $logat);
    $resposta->set("login", $login);

    $resposta->SetTemplate("portada.php");

    return $resposta;
}

?>