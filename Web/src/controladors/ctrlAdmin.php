<?php

function ctrlAdmin($peticio, $resposta, $contenidor)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("login", $login);

    if ($logat) {
        if ($_SESSION["login"]["rol"] == 1) {
            // EN CAS DE SER ADMIN
            $resposta->redirect("index.php?r=CRUDusuaris");
        }
        else {
            // EN CAS DE NO SER ADMIN
            $resposta->redirect("Location: index.php?r=login");
        }
    }
    return $resposta;
}