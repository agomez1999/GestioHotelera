<?php
    $usuari = $_POST['usuariR'];
    $contrasenya = $_POST['contrasenyaR'];
    session_start();
    $_SESSION['usuariR'] = $usuari;

    include "conex_db.php";

    $consulta = "INSERT INTO usuari(usuari, contrasenya) VALUES ('$usuari','$contrasenya')";
    $resultat = mysqli_query($loginConex,$consulta);

    $nFila = mysqli_num_rows($resultat);

    include("login.php");

?>
    <h1>REGISTRAT CORRECTAMENT</h1>

<?php
mysqli_free_result($resultat);
mysqli_close($loginConex);

?>