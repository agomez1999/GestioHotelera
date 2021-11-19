<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../public/styles/veureReserva_style.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
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
            <?php 
            $arrivada = new DateTime($dades['Arrivada']);
            $sortida = new DateTime($dades['Sortida']);
            $res = $sortida->diff($arrivada);
            $diesDif = $res->format("%a");
            ?>
            <td class="content"><?php echo $dades['NomClient'] . " " . $dades['Cognom'] ?></td>
            <td class="content"><?php echo $dades["Telefon"] ?></td>
            <td class="content"><?php echo $dades['Email'] ?></td>
            <td class="content"><?php echo $dades['DNI'] ?></td>
            <td class="content"><?php echo $dades['Arrivada'] ?></td>
            <td class="content"><?php echo $dades['Sortida'] ?></td>
            <td class="content"><?php echo $dades['NomHabitacio'] ?></td>
            <td class="content"><?php echo $dades['Preu'] * $diesDif ?>€</td>
            <td class="content download"><img src="../public/img/Habitacions/Extras/pdfdown.png" alt="Italian Trulli"></td>
            <td class="content"><a href="">Cancelar</a></td>
        </tr>
    </table>
</div>
</body>
<script type="text/javascript">


var doc = new jsPDF();

doc.text(20, 20, 'Dades de la reserva:');
doc.text(30, 30, 'Nom: <?php echo $dades['NomClient'] . " " . $dades['Cognom'] ?>');
doc.text(30, 40, 'Telefon: <?php echo $dades['Telefon'] ?>');
doc.text(30, 50, 'Email: <?php echo $dades['Email'] ?>');
doc.text(30, 60, 'DNI: <?php echo $dades['DNI'] ?>');
doc.text(30, 70, 'Arrivada: <?php echo $dades['Arrivada'] ?>');
doc.text(30, 80, 'Sortidam: <?php echo $dades['Sortida'] ?>');
doc.text(30, 90, 'Tipus Habitacio: <?php echo $dades['NomHabitacio'] ?>');
doc.text(30, 100, 'Preu: <?php echo $dades['Preu'] ?>');

doc.output('Reserva');

</script>
</html>