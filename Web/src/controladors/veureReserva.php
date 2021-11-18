<?php

function ctrlveureReserva($peticio, $resposta, $contenidor)
{
    $IdLogin = $_SESSION["login"]["id"];

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);
    $dades = $reserva->getReservaUser($IdLogin);
    echo $IdLogin;
    print_r($dades);
    die();

    $resposta->SetTemplate("veureReserva.php");
    return $resposta;
}