<?php

    include "../conex_db.php";

    $id = $_GET['id'];
    $query = "DELETE FROM loginDB WHERE id = '".$id."'";
    mysqli_query($conex, $query);
    header("location:users.php");
?>