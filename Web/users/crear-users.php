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
        <input type="text" name="usrname" value="<?php echo $fila['usuari'] ?>">
        <input type="text" name="passwd" value="<?php echo $fila['contrasenya'] ?>">
        <input type="submit" class="send" value="Modify">
        <a class="register-link" href="users.php">Back</a>
</form>

</div>
<?php 
    include ("../conex_db.php");

    $user = $_GET["usrname"];
    $passwd = $_GET["passwd"];

    if ($user != null || $passwd != null) {
        $query = "INSERT INTO loginDB(usuari, contrasenya, rol) VALUES ('".$user."','".$passwd."', 3)";
        mysqli_query($conex, $query);
        if ($user = 1) {
            header("Location:users.php");
        }
    }
?>
</body>
</html>