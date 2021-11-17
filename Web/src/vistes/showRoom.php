<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../public/styles/style.css" rel="stylesheet" type="text/css">
    <link href="../public/styles/showroom_style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
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
            <p><?php echo $llistaHabitacions['Preu'] ?>€</p>
            <a href='index.php?r=isLoged&id=<?php echo $llistaHabitacions["Tipo"] ?>' class='a' id='obrir<?php echo $llistaHabitacions['Numero'] ?>'><span>Book Now</span></a>
            <form action="index.php?r=preview">
                <input type="hidden" name="r" value="preview">
                <input type="hidden" name="arrivaldate" value="<?php echo $dA ?>">
                <input type="hidden" name="departuredate" value="<?php echo $dS ?>">
                <input type="submit" value="Back">
            </form>
        </div>
    </div>
<?php include "foot.php" ?>    
</body>
</html>