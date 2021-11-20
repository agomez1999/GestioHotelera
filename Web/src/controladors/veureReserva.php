<?php
// CONTROLADOR PER REDIRECCIONAR A VEURERESERVA.PHP
function ctrlveureReserva($peticio, $resposta, $contenidor)
{
    $IdLogin = $_SESSION["login"]["id"];

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);
    $dades = $reserva->getReservaUser($IdLogin);

    $resposta->set('dades', $dades);
    $resposta->SetTemplate("veureReserva.php");
    return $resposta;
}