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
    <script type="text/javascript" type="text/javascript" src="../libs/jsPDF-master"></script>
    <!-- EFECTE FADE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <?php foreach($dades as $row) { ?>
        <tr id="tablecontent">
            <?php
            $arrivada = new DateTime($dades['Arrivada']);
            $sortida = new DateTime($dades['Sortida']);
            $res = $sortida->diff($arrivada);
            $diesDif = $res->format('%a');
            ?>
            <td class="content"><?php echo $row['NomClient'] . " " . $row['Cognom'] ?></td>
            <td class="content"><?php echo $row["Telefon"] ?></td>
            <td class="content"><?php echo $row['Email'] ?></td>
            <td class="content"><?php echo $row['DNI'] ?></td>
            <td class="content"><?php echo $row['Arrivada'] ?></td>
            <td class="content"><?php echo $row['Sortida'] ?></td>
            <td class="content"><?php echo $row['NomHabitacio'] ?></td>
            <td class="content"><?php echo $row['Preu'] ?>€/nit</td>
            <td class="content download"><a href="javascript:getpdf<?= $row['IdReserva']?>()"><img src="../public/img/Habitacions/Extras/pdfdown.png" alt="Italian Trulli"></a></td>
            <td class="content"><a onclick="return confirm('Segur que vols eliminar aquesta reserva?')" href="index.php?r=deleteReservaUser&id=<?php echo $row['IdReserva'] ?>">Cancelar</a></td>
        </tr>
        <script type="text/javascript">

        function getpdf<?= $row['IdReserva']?>() {
        var doc = new jsPDF();
        doc.setFontSize(22);

        doc.text(20, 20, 'Dades de la reserva:');
        doc.text(30, 30, 'Nom: <?php echo $row['NomClient'] . " " . $row['Cognom'] ?>');
        doc.text(30, 40, 'Telefon: <?php echo $row['Telefon'] ?>');
        doc.text(30, 50, 'Email: <?php echo $row['Email'] ?>');
        doc.text(30, 60, 'DNI: <?php echo $row['DNI'] ?>');
        doc.text(30, 70, 'Arrivada: <?php echo $row['Arrivada'] ?>');
        doc.text(30, 80, 'Sortidam: <?php echo $row['Sortida'] ?>');
        doc.text(30, 90, 'Tipus Habitacio: <?php echo $row['NomHabitacio'] ?>');
        doc.text(30, 100, 'Preu: <?php echo $row['Preu']?>€/nit');
        doc.save("Reserva.pdf");
        }
        </script>
        <?php } ?>
    </table>
</div>
</body>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".good").fadeOut(1500);
        },3000);
    });
</script>
</html>