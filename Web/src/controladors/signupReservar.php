<?php
// CONTROLADOR PER FER REGISTER QUAN S'ESTÀ FENT UNA RESERVA
function ctrlSignupReservar($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("signupReservar.php");
    return $resposta;
}

?>