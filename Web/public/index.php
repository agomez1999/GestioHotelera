<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";

include "../src/controladors/portada.php";
include "../src/controladors/login.php";
include "../src/controladors/dologin.php";
include "../src/controladors/signup.php";
include "../src/controladors/doSignup.php";
include "../src/controladors/rooms.php";
include "../src/controladors/contacte.php";
include "../src/controladors/CRUDusuaris.php";
include "../src/controladors/editUser.php";
include "../src/controladors/mEditUser.php";
include "../src/controladors/deleteUser.php";
include "../src/controladors/CRUDhabitacions.php";
include "../src/controladors/newRoom.php";
include "../src/controladors/mNewRoom.php";
include "../src/controladors/preview.php";
include "../src/controladors/deleteHabitacions.php";
include "../src/controladors/editHabitacions.php";
include "../src/controladors/meditHabitacions.php";
include "../src/controladors/closeSession.php";
include "../src/controladors/editRoomType.php";
include "../src/controladors/mEditRoomType.php";
include "../src/controladors/newRoomType.php";
include "../src/controladors/mNewRoomType.php";
include "../src/controladors/deleteRoomType.php";
include "../src/controladors/manteniment.php";
include "../src/controladors/showRooms.php";

include "../src/middleware/middleAdmin.php";

$r = "";

if(isset($_REQUEST['r'])) {
    $r = $_REQUEST["r"];
}

/* Creem els diferents models */
$contenidor = new Emeset\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

if ($r === "dologin") {
    $resposta = ctrldoLogin($peticio, $resposta, $contenidor);
} elseif ($r === "login") {
    $resposta = ctrlLogin($peticio, $resposta, $contenidor);
} elseif ($r === "signup") {
    $resposta = ctrlSignup($peticio, $resposta, $contenidor);
} elseif ($r === "doSignup") {
    $resposta = ctrlDoSignup($peticio, $resposta, $contenidor);
} elseif ($r == "") {
    $resposta = ctrlPortada($peticio, $resposta, $contenidor);
} elseif ($r === "rooms") {
    $resposta = ctrlRooms($peticio, $resposta, $contenidor);
} elseif ($r === "contact") {
    $resposta = ctrlContact($peticio, $resposta, $contenidor);
} elseif ($r === "CRUDusuaris") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlCrudUsuaris");
} elseif ($r === "editUser") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlEditUser");
} elseif ($r === "mEditUser") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlmEditUser");
} elseif ($r === "deleteUser") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlDeleteUser");
} elseif ($r === "CRUDhabitacions") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlCrudHabitacions");
} elseif ($r === "newRoom") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlNewRoom");
} elseif ($r === "mNewRoom") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlmNewRoom");
} elseif ($r === "preview") {
    $resposta = ctrlPreview($peticio, $resposta, $contenidor);
} elseif ($r === "deleteHabitacions") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlDeleteHabitacions");
} elseif ($r === "editHabitacions") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlEdithabitacions"); 
} elseif ($r === "meditHabitacions") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlmEdithabitacions"); 
} elseif ($r === "closeSession") {
    $resposta = ctrlCloseSession($peticio, $resposta, $contenidor); 
} elseif ($r === "EditRoomType") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlEditRoomType"); 
} elseif ($r === "mEditRoomType") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlmEditRoomType"); 
} elseif ($r === "newRoomType") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlNewRoomType"); 
} elseif ($r === "mNewRoomType") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlmNewRoomType"); 
} elseif ($r === "deleteRoomType") {
    $resposta = middleCRUD($peticio, $resposta, $contenidor, "ctrlDeleteRoomType"); 
} elseif ($r === "manteniment") {
    $resposta = ctrlManteniment($peticio, $resposta, $contenidor); 
} elseif ($r === "showRoom") {
    $resposta = ctrlshowRoom($peticio, $resposta, $contenidor); 
}


$resposta->resposta();

?>