<?php
function ctrlIsLoged($peticio, $resposta, $contenidor)
{
    if (isset($_SESSION["login"])) {
        $resposta->SetTemplate("finalForm.php");
    } else {
        $resposta->SetTemplate("loginReservar.php");
    }
    return $resposta;
}