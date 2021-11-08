<?php

function middleCRUDusuaris($peticio, $resposta, $contenidor, $next)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("login", $login);

    if ($logat) {
        if ($_SESSION["login"]["rol"] == 1) {
            // EN CAS DE SER ADMIN
            $resposta = $next($peticio, $resposta, $contenidor);
        } else {
            // EN CAS DE NO SER ADMIN
            $resposta->redirect("Location: index.php?r=login");
        }
    } else {
        // EN CAS DE NO ESTAR LOGAT
        $resposta->redirect("Location: index.php?r=login");
    }
    return $resposta;
}

function middleCRUDhabitacions($peticio, $resposta, $contenidor, $next)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("login", $login);

    if ($logat) {
        if ($_SESSION["login"]["rol"] == 1) {
            // EN CAS DE SER ADMIN
            $resposta = $next($peticio, $resposta, $contenidor);
        }
        else {
            // EN CAS DE NO SER ADMIN
            $resposta->redirect("Location: index.php?r=login");
        }
    }
    return $resposta;
}

function middleNav($peticio, $resposta, $contenidor, $next)
{
    $login = $peticio->get("SESSION", "login");
    $logat = $peticio->get("SESSION", "logat");

    $resposta->set("login", $login);

    if ($logat) {
        if ($_SESSION["login"]["rol"] == 1) {
            // EN CAS DE SER ADMIN
            $resposta = $next($peticio, $resposta, $contenidor);
        }
        else {
            // EN CAS DE NO SER ADMIN
            $resposta->redirect("Location: index.php?r=login");
        }
    }
    return $resposta;
}

?>