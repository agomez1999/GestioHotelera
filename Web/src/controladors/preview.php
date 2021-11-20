<?php
// CONTROLADOR PER REDIRECCIONAR A PREVIEW.PHP
function ctrlPreview($peticio, $resposta, $contenidor)
{
    $arrivada = $peticio->get(INPUT_POST, "arrivaldate");
    $sortida = $peticio->get(INPUT_POST, "departuredate");
    $persones = $peticio->get(INPUT_POST, "nPersones");
    // POSEM ALGUNES DADES A LA SESSIÓ PER TRACTAR-LES MÉS ENDEVANT
    $resposta->setSession("Arrivada",$arrivada);
    $resposta->setSession("Sortida",$sortida);
    $resposta->setSession("Persones",$persones);

    $resposta->set("arrivada",$arrivada);
    $resposta->set("sortida",$sortida);
    // COMPROVEM QUE LA SORTIDA NO SIGUI MÉS PETITA QUE LA ENTRADA
    if (!($arrivada < $sortida)) {
        echo "<h2 class='bad'>La data d'entrada no pot ser més tard que la de sortida</h2>";
        $resposta->SetTemplate("portada.php");

        return $resposta;
    }
    // CREEM DUES DATES PER A COMPARAR-LES
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
            $sortidaBD = new DateTime($dataSortidaBD);
            for ($i = 0; $i < $diesDif; $i++) { // LOOP PER VEURE CADA DIA ENTRE LES DATES SOLICITADES
                if (($arrivada >= $arrivadaBD && $sortida <= $sortidaBD)) { // SI LA ARRIVADA ÉS MÉS GRAN O IGUAL QUE QUALSEVOL ARRIVADA DE LA BD
                    foreach ($tipo as $actual) {
                        $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
                        if ($Dispo["Reserves"] < $actual["Num"] && $actual["nOcupants"] >= $persones) { // MIREM DISPONIBILITAT
                            $Disponibles[] = $actual;
                        }
                    }
                } else {
                    $counter++;
                    if ($counter == $diesDif) { // EN CAS DE QUE EL CONTADOR SIGUI IGUAL AL LES NITS QUE ES VOLEN DORMIR
                        foreach ($tipo as $actual) {
                            $Dispo = $habitacions->selectDispoRoom($actual["Tipo"]);
                            if ($actual["nOcupants"] >= $persones) { // MIREM DISPONIBILITAT
                                $Disponibles[] = $actual;
                            }
                        }
                    }
                }
                $arrivada->modify('+1 day'); // AUGMENTEM LA DATA UN DIA MÉS
            }
        }

    $Disponibles = array_map("unserialize", array_unique(array_map("serialize", $Disponibles))); // AJUNTEM ELS DIFERENTS ARRAYS EN UN I SENSE REPETITS

    $resposta->set('Disponibles', $Disponibles);

    $resposta->SetTemplate("preview.php");
    return $resposta;
}

?>