<?php
// CONTROLADOR PER REENVIAR A LA PAGINA DE REGISTER
function ctrlSignup($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("signup.php");
    return $resposta;
}

?>