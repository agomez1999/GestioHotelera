<?php

function ctrlManteniment($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("manteniment.php");
    return $resposta;
}

?>