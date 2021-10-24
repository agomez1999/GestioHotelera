<?php 

include "conex_db.php";

session_start();

if (!isset($_SESSION['usrname']))
    echo "posat";

$user = $_SESSION['usrname'];
echo "$user";

?>