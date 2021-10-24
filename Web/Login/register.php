<?php
    $user = $_POST['usrname'];
    $passwd = $_POST['passwd'];
    $defaultRol = 3;
    session_start();
    $_SESSION['usrname'] = $user;

    include "../conex_db.php";

    if(strlen($user) > 4) {
        $isRegistred = "SELECT * FROM loginDB WHERE usuari = '$user'";
        $result = mysqli_query($conex, $isRegistred);
        $nRow = mysqli_num_rows($result);

        if($nRow < 1) {
            $query = "INSERT INTO loginDB(usuari, contrasenya, rol) VALUES ('$user','$passwd', '$defaultRol')";
            $result = mysqli_query($conex, $query);
            ?>
            <?php
                include("login_form.php");
                ?>
            <div class="good">
                <h3>REGISTERED SUCCEFULLY</h3>      
            </div>

            <?php
        } else {
            ?>
            <?php
                include("register_form.php");
                ?>
            <div class="bad">
                <h3>USER ALREADY REGISTERED</h3>
            </div>
            <?php
        } 
    } else {
        ?>
        <?php
            include("register_form.php");
        ?>
        <div class="bad">
            <h3>USERNAME IS TOO SHORT</h3>
        </div>
        <?php
    }
    
?>

<?php

mysqli_close($conex);

?>