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
include "../src/controladors/CRUDreserves.php";
include "../src/controladors/deleteReserva.php";
include "../src/controladors/editReserva.php";
include "../src/controladors/mEditReserva.php";
include "../src/controladors/newReserva.php";
include "../src/controladors/mNewReserva.php";
include "../src/controladors/finalForm.php";
include "../src/controladors/doSignupReservar.php";
include "../src/controladors/dologinReservar.php";
include "../src/controladors/signupReservar.php";
include "../src/controladors/loginReservar.php";
include "../src/controladors/isLoged.php";
include "../src/controladors/sendFinalForm.php";
include "../src/controladors/veureReserva.php";

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
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlCrudUsuaris");
} elseif ($r === "editUser") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlEditUser");
} elseif ($r === "mEditUser") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlmEditUser");
} elseif ($r === "deleteUser") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlDeleteUser");
} elseif ($r === "CRUDhabitacions") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlCrudHabitacions");
} elseif ($r === "newRoom") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlNewRoom");
} elseif ($r === "mNewRoom") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlmNewRoom");
} elseif ($r === "preview") {
    $resposta = ctrlPreview($peticio, $resposta, $contenidor);
} elseif ($r === "deleteHabitacions") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlDeleteHabitacions");
} elseif ($r === "editHabitacions") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlEdithabitacions"); 
} elseif ($r === "meditHabitacions") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlmEdithabitacions"); 
} elseif ($r === "closeSession") {
    $resposta = ctrlCloseSession($peticio, $resposta, $contenidor); 
} elseif ($r === "EditRoomType") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlEditRoomType"); 
} elseif ($r === "mEditRoomType") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlmEditRoomType"); 
} elseif ($r === "newRoomType") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlNewRoomType"); 
} elseif ($r === "mNewRoomType") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlmNewRoomType"); 
} elseif ($r === "deleteRoomType") {
    $resposta = EditorCRUD($peticio, $resposta, $contenidor, "ctrlDeleteRoomType"); 
} elseif ($r === "manteniment") {
    $resposta = ctrlManteniment($peticio, $resposta, $contenidor); 
} elseif ($r === "showRoom") {
    $resposta = ctrlshowRoom($peticio, $resposta, $contenidor); 
} elseif ($r === "CRUDreserves") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlCrudReserves"); 
} elseif ($r === "deleteReserva") {
    $resposta = ctrlDeleteReserva($peticio, $resposta, $contenidor); 
} elseif ($r === "editReserva") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlEditReserva"); 
} elseif ($r === "meditReserva") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlmEditReserva"); 
} elseif ($r === "newReserva") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlNewReserva"); 
} elseif ($r === "mNewReserva") {
    $resposta = AdminCRUD($peticio, $resposta, $contenidor, "ctrlmNewReserva"); 
} elseif ($r === "finalForm") {
    $resposta = ctrlfinalForm($peticio, $resposta, $contenidor); 
} elseif ($r === "loginReservar") {
    $resposta = ctrlLoginReservar($peticio, $resposta, $contenidor); 
} elseif ($r === "signupReservar") {
    $resposta = ctrlSignupReservar($peticio, $resposta, $contenidor); 
} elseif ($r === "dologinReservar") {
    $resposta = ctrldoLoginReservar($peticio, $resposta, $contenidor); 
} elseif ($r === "doSignupReservar") {
    $resposta = ctrlDoSignupReservar($peticio, $resposta, $contenidor); 
} elseif ($r === "isLoged") {
    $resposta = ctrlIsLoged($peticio, $resposta, $contenidor); 
} elseif ($r === "sendFinalForm") {
    $resposta = ctrlSendFinalForm($peticio, $resposta, $contenidor); 
} elseif ($r === "veureReserva") {
    $resposta = ctrlveureReserva($peticio, $resposta, $contenidor); 
}

$resposta->resposta();

?>