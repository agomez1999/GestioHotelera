<?php

    include "../conex_db.php";

    $id = $_GET['id'];
    $query = "DELETE FROM habitacions WHERE id = '".$id."'";
    mysqli_query($conex, $query);
    header("location:rooms-crud.php");
?>