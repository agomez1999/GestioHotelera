<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../users/users_style.css" type="text/css">
    <title>Hotel Trampolín | Users</title>
</head>
<body>
    <?php

include "../conex_db.php";

if (isset($_SESSION)) {
    session_destroy();
}

session_start();

$rol = $_SESSION["rol"];     
$user = $_SESSION['usrname'];

if (isset($_SESSION['rol'])) {
    if ($rol != 1) {
        header('location:../Login/login.php');
    } else {
        include "../adminNav.php";
    }
} else {
    header('location:../Login/login.php');
}

        $query = "SELECT * FROM habitacions";
        $result = mysqli_query($conex, $query);
        $nRow = mysqli_num_rows($result);

    ?>
    <div id="container">
    <table id="users-table">
        <tr>
            <td class="title2">#</td>
            <td class="title2">Tipus</td>
            <td class="title2">Quantitat</td>
            <td class="title2">Descripció</td>
            <td class="title2">Imatge 1</td>
            <td class="title2">Imatge 2</td>
            <td class="title2">Imatge 3</td>
            <td colspan="2" class='table-btn'><a id="add" href="insert-room.php" class="green-btn"><i class="far fa-plus-square"></i></a></td>
        </tr>
    <?php  
        while ($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"] ?></td>
                <td> <?php echo $row["tipus"] ?></td>
                <td> <?php echo $row["quantitat"] ?></td>
                <td> <?php echo $row["descripcio"] ?></td>
                <td> <?php echo $row["img1"] ?></td>
                <td> <?php echo $row["img2"] ?></td>
                <td> <?php echo $row["img3"] ?></td>
                <td class='table-btn'><a id='edit' href="editar-users.php?id=<?php echo $row['id'] ?>"><i class='far fa-edit'></i></a></td>
                <td class='table-btn'>
                <a id='delete' onclick="return confirm('Segur que vols eliminar aquest usuari?')" href="eliminar-users.php?id=<?php echo $row['id'] ?>"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
     <?php } ?>
    </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>