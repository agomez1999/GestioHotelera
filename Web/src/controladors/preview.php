<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>