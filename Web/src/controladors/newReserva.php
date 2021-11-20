<?php
// CONTROLADOR PER REDIRECCIONAR A LA PAGINA PER CREAR UNA NOVA RESERVA
function ctrlNewReserva($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newReserva.php");
    return $resposta;
}

?>