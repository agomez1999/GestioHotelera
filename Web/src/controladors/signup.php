<?php

function ctrlSignup($peticio, $resposta, $contenidor)
{
    $resposta->SetTemplate("signup.php");
    return $resposta;
}

?>