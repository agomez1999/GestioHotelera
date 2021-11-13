<?php

function ctrlNewReserva($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newReserva.php");
    return $resposta;
}

?>