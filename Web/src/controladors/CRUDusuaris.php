<?php
// CONTROLADOR PER AGAFAR DADES DEL CRUD D'USUARIS I REENVIAR-TE A LA SEVA PÀGINA
function ctrlCrudUsuaris($peticio, $resposta, $contenidor)
{

    $usuaris = new \Daw\UsuarisPDO($contenidor->config["db"]);
    // CRIDA DE FUNCIONS PER AGAFAR LES DADES DELS USUARIS
    $llistaUsuaris = $usuaris->selectAll();

    $resposta->set('llistaUsuaris', $llistaUsuaris);

    $resposta->SetTemplate("CRUDusuaris.php");
    return $resposta;
}