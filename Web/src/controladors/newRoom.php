<?php
// CONTROLADOR PER REDIRECCIONAR A LA PAGINA PER CREAR UNA NOVA HABITACIÓ
function ctrlNewRoom($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newRoom.php");
    return $resposta;
}

?>