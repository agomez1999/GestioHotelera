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
    $query = "SELECT * FROM habitacions WHERE id = '".$id."'";
    $consulta = mysqli_query($conex, $query);
    
?>
<?php while ($fila = mysqli_fetch_assoc($consulta)) { ?>
    <div>

    <form class="login" method="get">
        <p>Edit</p>
            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            <input type="text" name="type" value="<?php echo $fila['tipus'] ?>">
            <input type="number" name="quant" value="<?php echo $fila['quantitat'] ?>">
            <input type="text" name="desc" value="<?php echo $fila['descripcio'] ?>">
            <input type="text" name="img1" value="<?php echo $fila['img1'] ?>">
            <input type="text" name="img2" value="<?php echo $fila['img2'] ?>">
            <input type="text" name="img3" value="<?php echo $fila['img3'] ?>">
            <input type="submit" class="send" value="Modify">
            <a class="register-link" href="rooms-crud.php">Back</a>
    </form>

    </div>
    <?php } ?>
<?php 
    $type = $_GET["type"];
    $quant = $_GET["quant"];
    $desc = $_GET["desc"];
    $img1 = $_GET["img1"];
    $img2 = $_GET["img2"];
    $img3 = $_GET["img3"];
    $id2 = $_GET["id"];

    if ($type!=null || $desc!=null) {
        $query2 = "UPDATE habitacions SET tipus='".$type."', quantitat='".$quant."', descripcio='".$desc."', img1='".$img1."', img2='".$img2."', img3='".$img3."' WHERE id='".$id2."'";
    mysqli_query($conex,$query2);
    if ($user = 1) {
        header("Location:rooms-crud.php");
    }
    }
    
?>
</body>
</html>
