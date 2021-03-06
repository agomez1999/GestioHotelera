<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CUSTOM CSS -->
    <link href="../public/styles/style.css" rel="stylesheet" type="text/css">
    <link href="../public/styles/preview_style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hotel Trampolín | Habitacions Disponibles</title>
</head>
<body>
    <?php include "navmobile.php"; ?>
    <div class="grid-container">
        <?php foreach($Disponibles as $row) { ?>
        <div>
            <h1>Habitació <?php echo $row["Nom"] ?></h1>
            <img src="<?php echo $row["Imatge1"] ?>" alt="">
            <a href='index.php?r=showRoom&id=<?php echo $row["Tipo"]?>&dA=<?php echo $arrivada?>&dS=<?php echo $sortida?>' class='a'><span>Veure habitació</span></a>
        </div>
        <?php } ?>
    </div>
<?php include "foot.php"; ?>    
</body>
</html>