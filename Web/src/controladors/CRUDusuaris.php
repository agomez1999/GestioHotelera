<?php

function ctrlCrudUsuaris($peticio, $resposta, $contenidor)
{

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $llistaUsuaris = $usuaris->selectAll();

    $resposta->set('llistaUsuaris', $llistaUsuaris);

    $resposta->SetTemplate("CRUDusuaris.php");
    return $resposta;
}