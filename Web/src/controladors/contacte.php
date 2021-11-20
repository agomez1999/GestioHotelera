<?php
// CONTROLADOR PER REENVIAR A CONTACTE.PHP
function ctrlContact($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("contacte.php");
    return $resposta;
}

?>