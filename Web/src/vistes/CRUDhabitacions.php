<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../public/styles/CRUDusers_style.css" type="text/css">
    <title>Hotel Trampolín | Rooms</title>
</head>
<body>
    <?php

include "nav.php";

    ?>
    <div id="container">
    <table id="users-table">
        <tr>
            <td class="title2">Id</td>
            <td class="title2">Tipo</td>
            <td class="title2">Preu</td>
            <td colspan="2" class='table-btn' style="background-color:green"><a id="add2" href="index.php?r=newRoomType" class="green-btn"><i class="far fa-plus-square"></i></a></td>
        </tr>
    <?php  
        foreach($llistaHabitacionsTipus as $row2) {
            ?>
            <tr>
                <td> <?php echo $row2["Id"] ?></td>
                <td> <?php echo $row2["Tipo"] ?></td>
                <td> <?php echo $row2["Preu"] ?></td>
                <td class='table-btn edit'><a id='edit2' class="edit" href="index.php?r=EditRoomType&id=<?php echo $row2['Id'] ?>"><i class='far fa-edit'></i></a></td>
                <td class='table-btn delete'>
                <a id='delete2' class="delete" onclick="return confirm('Segur que vols eliminar aquesta habitació?')" href="index.php?r=deleteRoomType&id=<?php echo $row2['Id'] ?>"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
     <?php } ?>
    </table>
    <table id="users-table">
        <tr>
            <td class="title2">Numero</td>
            <td class="title2">Tipo</td>
            <td class="title2">Descripció</td>
            <td class="title2">Serveis</td>
            <td class="title2">Imatge 1</td>
            <td class="title2">Imatge 2</td>
            <td class="title2">Imatge 3</td>
            <td colspan="2" class='table-btn' style="background-color:green"><a id="add" href="index.php?r=newRoom" class="green-btn"><i class="far fa-plus-square"></i></a></td>
        </tr>
    <?php  
        foreach($llistaHabitacions as $row) {
            ?>
            <tr>
                <td> <?php echo $row["Numero"] ?></td>
                <td> <?php echo $row["Tipo"] ?></td>
                <td> <?php echo $row["Descripcio"] ?></td>
                <td> <?php echo $row["Serveis"] ?></td>
                <td> <?php echo $row["Imatge1"] ?></td>
                <td> <?php echo $row["Imatge2"] ?></td>
                <td> <?php echo $row["Imatge3"] ?></td>
                <td class='table-btn edit'><a id='edit' class="edit" href="index.php?r=editHabitacions&id=<?php echo $row['Numero'] ?>"><i class='far fa-edit'></i></a></td>
                <td class='table-btn delete'>
                <a id='delete' class="delete" onclick="return confirm('Segur que vols eliminar aquesta habitació?')" href="index.php?r=deleteHabitacions&id=<?php echo $row['Numero'] ?>"><i class='far fa-trash-alt'></i></a>
                </td>
            </tr>
     <?php } ?>
    </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>