<?php
// CONTROLADOR PER COMPROVARA QUE L'USUARI ESTÀ LOGAT QUAN ES VA A FER UNA RESERVA
function ctrlIsLoged($peticio, $resposta, $contenidor)
{
    if (isset($_SESSION["login"])) {
        $resposta->SetTemplate("finalForm.php");
    } else {
        $resposta->SetTemplate("loginReservar.php");
    }
    return $resposta;
}