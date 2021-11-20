<?php
// CONTROLADOR PER CREAR UNA NOVA PETICIÓ DE CONTACTE
function ctrlSendContact($peticio, $resposta, $contenidor)
{
    $Nom = $peticio->get(INPUT_POST, "fullname");
    $Mail = $peticio->get(INPUT_POST, "email");
    $Telefon = $peticio->get(INPUT_POST, "phone");
    $Assumpte = $peticio->get(INPUT_POST, "affair");
    $Missatge = $peticio->get(INPUT_POST, "message");

    $contacte = new \Daw\ContactePDO($contenidor->config["db"]);

    $consulta = $contacte->insert($Nom, $Mail, $Telefon, $Assumpte, $Missatge);

    echo "<h2 class='good'>FORMULARI ENVIAT CORRECTAMENT</h2>";
    $resposta->SetTemplate("portada.php");
    
    return $resposta;
}
?>