<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../public/styles/style.css" rel="stylesheet" type="text/css">
    <link href="../public/styles/finalForm_style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "navmobile.php" ?>
    <div class="grid-container">

        <div class='body-border'>
            <div id='carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                    <li data-target='#carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' data-slide-to='0' class='active'></li>
                    <li data-target='#carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' data-slide-to='1'></li>
                    <li data-target='#carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' data-slide-to='2'></li>
                </ol>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <img class='d-block w-100' src='<?php echo $llistaHabitacions['Imatge1'] ?>' alt='First slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='<?php echo $llistaHabitacions['Imatge2'] ?>' alt='Second slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='<?php echo $llistaHabitacions['Imatge3'] ?>' alt='Third slide'>
                    </div>
                </div>
                <a class='carousel-control-prev' href='#carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleIndicators<?php echo $llistaHabitacions['Numero'] ?>' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>
        <div class='roomtxt'>
            <h2 class='rooms-title'>Habitació <?php echo $llistaHabitacions['Nom'] ?></h2>
            <p><?php echo $llistaHabitacions['Descripcio'] ?></p>
            <a href='#' class='a' id='obrir<?php echo $llistaHabitacions['Numero'] ?>'><span>Book Now</span></a>
        </div>
        
    </div>
<?php include "foot.php" ?>    
</body>
</html>