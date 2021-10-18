<?php
    $usuari = $_POST['usuariR'];
    $contrasenya = $_POST['contrasenyaR'];
    session_start();
    $_SESSION['usuariR'] = $usuari;

    include "conex_db.php";

    $isRegistred = "SELECT * FROM loginDB WHERE usuari = '$usuari'";
    $resultat = mysqli_query($conex, $isRegistred);
    $nFila = mysqli_num_rows($resultat);

    include("login.php");

    if($nFila < 1) {
        $consulta = "INSERT INTO loginDB(usuari, contrasenya) VALUES ('$usuari','$contrasenya')";
        $resultat = mysqli_query($conex,$consulta);
        echo "<h1>REGISTRAT CORRECTAMENT</h1>";       
    } else {
        echo "<h1>USUARI JA REGISTRAT</h1>";
    } 
?>

<?php
mysqli_free_result($resultat);
mysqli_close($conex);

?>