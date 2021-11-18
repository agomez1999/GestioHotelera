<?php
function ctrlSendFinalForm($peticio, $resposta, $contenidor)
{
    $Nom = $peticio->get(INPUT_POST, "Nom");
    $Cognom = $peticio->get(INPUT_POST, "Cognom");
    $Email = $peticio->get(INPUT_POST, "Email");
    $Tarjeta = $peticio->get(INPUT_POST, "Tarjeta");
    $CP = $peticio->get(INPUT_POST, "Codi");
    $Poblacio = $peticio->get(INPUT_POST, "Poblacio");
    $Telefon = $peticio->get(INPUT_POST, "Telefon");
    $DNI = $peticio->get(INPUT_POST, "DNI");
    $Missatge = $peticio->get(INPUT_POST, "Missatge");

    $Arrivada = $_SESSION['Arrivada'];
    $Sortida = $_SESSION['Sortida'];
    $Persones = $_SESSION['Persones'];
    $Tipo = $_SESSION['Tipo'];

    $reserva = new \Daw\ReservesPDO($contenidor->config["db"]);

    $InsertClient = $reserva->insertClient($Nom, $Cognom, $Email, $Tarjeta, $CP, $Poblacio, $Telefon, $DNI, $Missatge); // INSERTEM LES DADES DEL CLIENT A LA BASE DE DADES.
    $InsertReserva = $reserva->insert($Arrivada, $Sortida, $Persones, $Tipo); // INSERTEM LES DADES DE LA RESERVA
    $IdClient = $reserva->getClientId();
    $IdReserva = $reserva->getReservaId();
    $IdClient = $IdClient[0]['ClientId'];
    $IdReserva = $IdReserva[0]['ReservaId'];
    $InsertReservaClient = $reserva->insertReservaClient($IdClient, $IdReserva); // VINCULEM EL CLIENT AMB LA RESERVA

    $resposta->SetTemplate("portada.php");

    return $resposta;
}