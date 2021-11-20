<?php
// CONTROLADOR PER REDIRECCIONAR A LA PAGINA PER CREAR UN NOU TIPUS D'HABITACIÓ
function ctrlNewRoomType($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("newRoomType.php");
    return $resposta;
}

?>