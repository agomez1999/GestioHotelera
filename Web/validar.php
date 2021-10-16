<?php
    $usuari = $_POST['usuari'];
    $contrasenya = $_POST['contrasenya'];
    session_start();
    $_SESSION['usuari'] = $usuari;

    include "conex_db.php";

    $consulta = "SELECT * FROM usuari WHERE usuari = '$usuari' and contrasenya = '$contrasenya'";
    $resultat = mysqli_query($loginConex,$consulta);

    $nFila = mysqli_num_rows($resultat);

    if ($nFila) {
        header("location:inici.php");
    } else {
        ?>
        <?php
        include("login.php");
        ?>
        <h1>ERROR EN LA AUTENTICACIÓ</h1>
        <?php
    }
mysqli_free_result($resultat);
mysqli_close($loginConex);