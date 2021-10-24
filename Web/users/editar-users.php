<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Login/main.css" rel="stylesheet" type="text/css">
    <title>Hotel Trampolín</title>
</head>
<body>
<?php
    include "../conex_db.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM loginDB WHERE id = '".$id."'";
    $consulta = mysqli_query($conex, $query);
    
?>
<?php while ($fila = mysqli_fetch_assoc($consulta)) { ?>
    <div>

    <form class="login" method="get">
        <p>Edit</p>
            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            <input type="number" name="rol" value="<?php echo $fila['rol'] ?>" max="3" min="1">
            <input type="text" name="usrname" value="<?php echo $fila['usuari'] ?>">
            <input type="text" name="passwd" value="<?php echo $fila['contrasenya'] ?>">
            <input type="submit" class="send" value="Modify">
            <a class="register-link" href="users.php">Back</a>
    </form>

    </div>
    <?php } ?>
<?php 
    $id2 = $_GET['id'];
    $user = $_GET['usrname'];
    $passwd = $_GET['passwd'];
    $rol = $_GET['rol'];
    if ($user!=null || $passwd!=null) {
        $query2 = "UPDATE loginDB SET usuari='".$user."', contrasenya='".$passwd."', rol='".$rol."' WHERE id='".$id2."'";
    mysqli_query($conex,$query2);
    if ($user = 1) {
        header("Location:users.php");
    }
    }
    
?>
</body>
</html>

