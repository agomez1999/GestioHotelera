<?php

function ctrlContact($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("contacte.php");
    return $resposta;
}

?>