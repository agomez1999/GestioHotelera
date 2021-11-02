<?php

function ctrlNewRoom($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newRoom.php");
    return $resposta;
}

?>