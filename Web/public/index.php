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
include "../src/controladors/ctrlAdmin.php";

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
    $resposta = middleAdmin($peticio, $resposta, $contenidor, "ctrlAdmin");
} elseif ($r === "editUser") {
    $resposta = ctrlEditUser($peticio, $resposta, $contenidor);
} elseif ($r === "mEditUser") {
    $resposta = ctrlmEditUser($peticio, $resposta, $contenidor);
} elseif ($r === "deleteUser") {
    $resposta = ctrlDeleteUser($peticio, $resposta, $contenidor);
} elseif ($r === "CRUDhabitacions") {
    $resposta = ctrlCrudHabitacions($peticio, $resposta, $contenidor);
} elseif ($r === "newRoom") {
    $resposta = ctrlNewRoom($peticio, $resposta, $contenidor);
} elseif ($r === "mNewRoom") {
    $resposta = ctrlmNewRoom($peticio, $resposta, $contenidor);
} elseif ($r === "preview") {
    $resposta = ctrlPreview($peticio, $resposta, $contenidor);
} elseif ($r === "deleteHabitacions") {
    $resposta = ctrlDeleteHabitacions($peticio, $resposta, $contenidor);
} elseif ($r === "editHabitacions") {
    $resposta = ctrlEdithabitacions($peticio, $resposta, $contenidor); 
} elseif ($r === "meditHabitacions") {
    $resposta = ctrlmEdithabitacions($peticio, $resposta, $contenidor); 
} elseif ($r === "closeSession") {
    $resposta = ctrlCloseSession($peticio, $resposta, $contenidor); 
} elseif ($r === "EditRoomType") {
    $resposta = ctrlEditRoomType($peticio, $resposta, $contenidor); 
} elseif ($r === "mEditRoomType") {
    $resposta = ctrlmEditRoomType($peticio, $resposta, $contenidor); 
} elseif ($r === "newRoomType") {
    $resposta = ctrlNewRoomType($peticio, $resposta, $contenidor); 
} elseif ($r === "mNewRoomType") {
    $resposta = ctrlmNewRoomType($peticio, $resposta, $contenidor); 
} elseif ($r === "deleteRoomType") {
    $resposta = ctrlDeleteRoomType($peticio, $resposta, $contenidor); 
} elseif ($r === "manteniment") {
    $resposta = ctrlManteniment($peticio, $resposta, $contenidor); 
} 


$resposta->resposta();

?>