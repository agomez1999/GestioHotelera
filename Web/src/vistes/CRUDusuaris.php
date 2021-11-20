<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../public/styles/CRUDusers_style.css" type="text/css">
    <title>Hotel Trampolín | CRUD Usuaris</title>
</head>
<body>
    <?php

    include "navmobile.php";

    ?>
    <div id="container">
    <table id="users-table">
        <tr>
            <td class="title2">#</td>
            <td class="title2">Usuari</td>
            <td class="title2">Contrasenya</td>
            <td class="title2">Rol</td>
            <td colspan="2" class='table-btn'><a id="add" href="index.php?r=signup" class="green-btn"><i class="far fa-plus-square"></i></a></td>
        </tr>
            <?php
            foreach($llistaUsuaris as $row) {
            ?>
            <tr>
                <td> <?php echo $row["id"] ?></td>
                <td> <?php echo $row["usuari"] ?></td>
                <td> <?php echo $row["contrasenya"] ?></td>
                <td> <?php echo $row["rol"] ?></td>
                <td class='table-btn'><a id='edit' href="index.php?r=editUser&id=<?php echo $row["id"] ?>" class="green-btn"><i class='far fa-edit'></i></a></td>
                <td class='table-btn'>
                <a id='delete' onclick="return confirm('Segur que vols eliminar aquest usuari?')" href="index.php?r=deleteUser&id=<?php echo $row['id'] ?>"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
     <?php } ?>
    </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>