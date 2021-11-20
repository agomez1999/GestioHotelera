<?php
// CONTROLADOR PER REDIRECCIONAR A LA PÀGINA DE LOGIN QUAN S'ESTÀ FENT UNA RESERVA
function ctrlLoginReservar($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("loginReservar.php");
    return $resposta;
}

?>