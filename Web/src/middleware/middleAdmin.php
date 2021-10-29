<?php

function middleAdmin($peticio, $resposta, $contenidor, $next)
{
    $nom = $peticio->get("SESSION", "nom");
    $cognom = $peticio->get("SESSION", "cognom");
    $missatge = $peticio->get("SESSION", "missatge");
    $resposta->set("missatge", $missatge);

    /* Validem que nom i cognom estan definits */
    if ($nom == "" || $cognom == "") {
        $resposta->setSession("error", "Has intentat accedir a la pàgina sense identificar-te!!!!!!\n");
        $resposta->redirect("Location:index.php?r=identificar");
    } else {
        $resposta = $next($peticio, $resposta, $contenidor);
    }


    return $resposta;
}

?>