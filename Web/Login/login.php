<?php

    $user = $_POST['usrname'];
    $passwd = $_POST['passwd'];

    session_start();
    $_SESSION['usrname'] = $user;

    include "../conex_db.php";

    $query = "SELECT * FROM loginDB WHERE usuari = '$user' and contrasenya = '$passwd'";
    $result = mysqli_query($conex, $query);

    $row = mysqli_fetch_array($result);

    $return[] = $row['usrname'];
    $nRow = mysqli_num_rows($result);

    $_SESSION['rol'] = $row[3];
    $rol = $_SESSION['rol'];

    if ($nRow) {
        header("location:../index/inici.php?rol=$rol");
        return $return;
    } else {
        ?>
        <?php
        include("login_form.php");
        ?>
        <div class="bad">
        <h3>USER NOT REGISTERED</h3>
        </div>
        <?php
    }
mysqli_free_result($result);
mysqli_close($conex);

?>