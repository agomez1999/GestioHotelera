<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    $dies = strtotime($sortida) - strtotime($arrivada);
    echo $dies;
    die();

    if (!($arrivada < $sortida)) {
        echo "<h2 class='bad'>La data d'entrada no pot ser més gran que la de sortida</h2>";
        $resposta->SetTemplate("portada.php");

        return $resposta;
    } 

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
        
        $tipo = $habitacions->getRooms();
        $Dispo = array();
        $Disponibles = [];

        foreach ($tipo as $actual) {
            $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
            if ($Dispo["Reserves"] < $actual["Num"] && $actual["nOcupants"] >= $persones) {
                    $Disponibles[] = $actual;
            }
        }

    $resposta->set('Disponibles', $Disponibles);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>