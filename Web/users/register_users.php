<?php
    $user = $_POST['usrname'];
    $passwd = $_POST['passwd'];

    include "../conex_db.php";

    if(strlen($user) > 2) {
        $isRegistred = "SELECT * FROM loginDB WHERE usuari = '$user'";
        $result = mysqli_query($conex, $isRegistred);
        $nRow = mysqli_num_rows($result);

        if($nRow < 1) {
            $query = "INSERT INTO loginDB(usuari, contrasenya) VALUES ('$user','$passwd')";
            $result = mysqli_query($conex, $query);
            ?>
            <?php
                include("users.php");
                ?>
            <div class="good">
                <h3>REGISTERED SUCCEFULLY</h3>      
            </div>

            <?php
        } else {
            ?>
            <?php
                include("users.php");
                ?>
            <div class="bad">
                <h3>USER ALREADY REGISTERED</h3>
            </div>
            <?php
        } 
    } else {
        ?>
        <?php
            include("users.php");
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