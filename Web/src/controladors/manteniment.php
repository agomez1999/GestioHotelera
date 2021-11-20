<?php
// CONTROLADOR PER REDIRECCIONAR A UNA PÀGINA DE "EN MANTENIMENT"
function ctrlManteniment($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("manteniment.php");
    return $resposta;
}

?>