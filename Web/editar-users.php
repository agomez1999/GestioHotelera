<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Trampolín</title>
</head>
<body>
<?php
    include "conex_db.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM loginDB WHERE id = '".$id."'";
    $consulta = mysqli_query($conex, $query);
    
?>
<?php while ($fila = mysqli_fetch_assoc($consulta)) { ?>
    <div>
    <form>
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>" />
        <label >Usuari:</label>
        <input type="text" name="usrname" value="<?php echo $fila['usuari'] ?>">
        <label >Contrasenya:</label>
        <input type="text" name="passwd" value="<?php echo $fila['contrasenya'] ?>">
        <input type="submit" value="Modificar">
        
    </form>
    </div>
    <?php } ?>
<?php 
    $id2 = $_GET['id'];
    $user = $_GET['usrname'];
    $passwd = $_GET['passwd'];
    if ($user!=null || $passwd!=null) {
        $query2 = "UPDATE loginDB SET usuari='".$user."', contrasenya='".$passwd."' WHERE id='".$id2."'";
    mysqli_query($conex,$query2);
    if ($user = 1) {
        header("Location:users.php");
    }
    }
    
?>
</body>
</html>

