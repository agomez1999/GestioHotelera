<?php

function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");

    if (!($arrivada < $sortida)) {
        echo "<h2 class='bad'>La data d'entrada no pot ser més tard que la de sortida</h2>";
        $resposta->SetTemplate("portada.php");

        return $resposta;
    }

    $arrivada = new DateTime($arrivada);
    $sortida = new DateTime($sortida);
    $res = $sortida->diff($arrivada);
    $diesDif = $res->format("%a"); // DIES DE DIFERÈNCIA ENTRE DATES

    $habitacions = new \Daw\RoomsPDO($contenidor->config["db"]);
        
        $tipo = $habitacions->getRooms();
        $Dispo = array();
        $Disponibles = [];

        for ($i = 0; $i < $diesDif; $i++) {
            //echo $arrivada->format('Y-m-d');
            // AQUI LA QUERY
            $arrivada->modify('+1 day');
        }

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