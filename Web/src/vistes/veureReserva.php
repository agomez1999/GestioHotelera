<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../public/styles/veureReserva_style.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php include "navmobile.php"; ?>
<div id="container">
    <table id="users-table">
        <tr id="titles">
            <td class="title">Nom</td>
            <td class="title">Telefon</td>
            <td class="title">Correu</td>
            <td class="title">DNI</td>
            <td class="title">Arrivada</td>
            <td class="title">Sortida</td>
            <td class="title">Habitacio</td>
            <td class="title">Preu</td>
            <td colspan="2" class="title"></td>
        </tr>
        <tr id="tablecontent">
            <td class="content"><?php echo $dades['NomClient'] . " " . $dades['Cognom'] ?></td>
            <td class="content"><?php echo $dades["Telefon"] ?></td>
            <td class="content"><?php echo $dades['Email'] ?></td>
            <td class="content"><?php echo $dades['DNI'] ?></td>
            <td class="content"><?php echo $dades['Arrivada'] ?></td>
            <td class="content"><?php echo $dades['Sortida'] ?></td>
            <td class="content">Habitacio <?php echo $dades['NomHabitacio'] ?></td>
            <td class="content"><?php echo $dades['Preu'] ?></td>
            <td class="content download"><img src="../public/img/Habitacions/Extras/pdfdown.png" alt="Italian Trulli"></td>
            <td class="content"><a onclick="return confirm('Segur que vols eliminar aquesta reserva?')" href="index.php?r=deleteReserva&id=<?php echo $dades['IdReserva'] ?>"><i class='far fa-trash-alt'></i></a></td>
        </tr>
    </table>
</div>
</body>
</html>


