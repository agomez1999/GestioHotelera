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
    <title>Hotel Trampolín | CRUD Reserves</title>
</head>
<body>
    <?php

    include "navmobile.php";

    ?>
    <div id="container">
    <table id="users-table">
        <tr>
            <td class="title2">#</td>
            <td class="title2">Arrivada</td>
            <td class="title2">Sortida</td>
            <td class="title2">Persones</td>
            <td class="title2">Tipo habitació</td>
            <td colspan="2" class='table-btn'><a id="add" href="index.php?r=newReserva" class="green-btn"><i class="far fa-plus-square"></i></a></td>
        </tr>
            <?php
            foreach($llistaReserves as $row) {
            ?>
            <tr>
                <td> <?php echo $row["Id"] ?></td>
                <td> <?php echo $row["Arrivada"] ?></td>
                <td> <?php echo $row["Sortida"] ?></td>
                <td> <?php echo $row["Persones"] ?></td>
                <td> <?php echo $row["TipoHabitacio"] ?></td>
                <td class='table-btn'><a id='edit' href="index.php?r=editReserva&id=<?php echo $row["Id"] ?>" class="edit"><i class='far fa-edit'></i></a></td>
                <td class='table-btn'>
                <a id='delete' onclick="return confirm('Segur que vols eliminar aquesta reserva?')" href="index.php?r=deleteReserva&id=<?php echo $row['Id'] ?>" class="delete"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
     <?php } ?>
    </table>
    </div>
</body>
</html>