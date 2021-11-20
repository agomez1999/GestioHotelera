<?php

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = 'alex';
$config["db"]["pass"] = 'daw-2020';
$config["db"]["dbname"] = 'gestio_hotelera';
$config["db"]["host"] = 'localhost';
// EMESET
require_once "../src/emeset/peticio.php";
require_once "../src/emeset/resposta.php";
require_once "../src/emeset/contenidor.php";
// MODELS
require_once "../src/models/usuarisPDO.php";
require_once "../src/models/roomsPDO.php";
require_once "../src/models/reservesPDO.php";
require_once "../src/models/contactePDO.php";

?>