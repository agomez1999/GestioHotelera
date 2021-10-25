<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Login/main.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<div>

<form class="login">
    <p>New</p>
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
        <input type="text" name="type" value="<?php echo $fila['tipus'] ?>" placeholder="Type">
        <input type="number" name="quant" value="<?php echo $fila['quantitat'] ?>" placeholder="Quantity">
        <input type="text" name="desc" value="<?php echo $fila['descripcio'] ?>" placeholder="Description">
        <input type="text" name="img1" value="<?php echo $fila['img1'] ?>" placeholder="Image 1">
        <input type="text" name="img2" value="<?php echo $fila['img2'] ?>" placeholder="Image 2">
        <input type="text" name="img3" value="<?php echo $fila['img3'] ?>" placeholder="Image 3">
        <input type="submit" class="send" value="Create">
        <a class="register-link" href="rooms-crud.php">Back</a>
</form>

</div>
<?php 
    include ("../conex_db.php");

    $type = $_GET["type"];
    $quant = $_GET["quant"];
    $desc = $_GET["desc"];
    $img1 = $_GET["img1"];
    $img2 = $_GET["img2"];
    $img3 = $_GET["img3"];

    if ($type != null || $desc != null) {
        $query = "INSERT INTO habitacions(tipus, quantitat, descripcio, img1, img2, img3) VALUES ('".$type."','".$quant."','".$desc."','".$img1."','".$img2."','".$img3."')";
        mysqli_query($conex, $query);
        if ($type = 1) {
            header("Location:rooms-crud.php");
        }
    }
?>
</body>
</html>