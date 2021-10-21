<?php

    $user = $_POST['usrname'];
    $passwd = $_POST['passwd'];

    session_start();
    $_SESSION['usrname'] = $user;

    include "../conex_db.php";

    $query = "SELECT * FROM loginDB WHERE usuari = '$user' and contrasenya = '$passwd'";
    $result = mysqli_query($conex, $query);

    $nRow = mysqli_num_rows($result);

    if ($nRow) {
        header("location:../inici.php");
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