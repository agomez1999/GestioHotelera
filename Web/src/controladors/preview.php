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
    $reserves = new \Daw\ReservesPDO($contenidor->config["db"]);
        
        $tipo = $habitacions->getRooms();
        $Dispo = array();
        $Disponibles = [];
        $actual = [];
        
        $reserva = $reserves->selectAll();

        foreach ($reserva as $res) { // LOOP PER COMPARAR CADA DATA AMB LES DATES DE LES RESERVES FETES
            $counter = 0;
            $ok = false;
            $dataArrivadaBD = $res["Arrivada"];
            $arrivadaBD = new DateTime($dataArrivadaBD);
            $dataSortidaBD = $res["Sortida"];
            $soritdaBD = new DateTime($dataSoritdaBD);
            for ($i = 0; $i < $diesDif; $i++) { // LOOP PER VEURE CADA DIA ENTRE LES DATES SOLICITADES
                if ($arrivada >= $arrivadaBD || $sortida < $sortidaDB) {
                    foreach ($tipo as $actual) {
                        $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
                        if ($Dispo["Reserves"] < $actual["Num"] && $actual["nOcupants"] >= $persones) {
                            $Disponibles[] = $actual;
                        }
                    }
                } else {
                    $counter++;
                    if ($counter == $diesDif) {
                        foreach ($tipo as $actual) {
                            $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
                            if ($actual["nOcupants"] >= $persones) {
                                $Disponibles[] = $actual;
                            }
                        }
                    }
                }
                $arrivada->modify('+1 day');
            }
        }

    $Disponibles = array_map("unserialize", array_unique(array_map("serialize", $Disponibles)));

    $resposta->set('Disponibles', $Disponibles);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>