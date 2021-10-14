<?php 

    include "conex_db.php";

    if (isset($_POST['send'])) {
      if (strlen($_POST['name']) >= 1 && 
        strlen($_POST['surname']) >= 1 && 
        strlen($_POST['email']) >= 1) {
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = trim($_POST['email']);
            $consulta = "INSERT INTO dades(name, surname, email) VALUES('$name','$surname','$email')";
            $resultat = mysqli_query($conex, $consulta);
            if ($resultat) {
                echo "Enviat correctament.";
            }
        }
    } 
?>