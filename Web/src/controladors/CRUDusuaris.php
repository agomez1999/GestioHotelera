<?php

function ctrlCrudUsuaris($peticio, $resposta, $contenidor)
{

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);

    $llistaUsuaris = $usuaris->selectAll();

    $resposta->set('llistaUsuaris', $llistaUsuaris);

    if (isset($_SESSION["login"])) {
        if ($_SESSION["login"]["rol"] == 1)
            $resposta->SetTemplate("CRUDusuaris.php");
            return $resposta;
    } else {
        $resposta->redirect("location: index.php?r=login");
    }

    
}
