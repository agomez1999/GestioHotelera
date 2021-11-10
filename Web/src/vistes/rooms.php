<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <!-- CSS -->
     <link href="../style.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="../public/styles/rooms_style.css" type="text/css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    include "navmobile.php";
?>
    <script>
     let nav = document.getElementById('rooms');
     nav.classList.add('active');
     </script>
    <div class="p2-body-container animated bounceInUp">
    <?php

        $counter = 0;

        foreach($llistaHabitacions as $row) {
            if ($counter % 2 == 0) { ?>
                    <div class='p2-gray-body-row'>
                    <div class='body-border'>
                        <div id='carouselExampleIndicators<?php echo $row['Numero'] ?>' class='carousel slide' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='0' class='active'></li>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='1'></li>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='2'></li>
                            </ol>
                            <div class='carousel-inner'>
                                <div class='carousel-item active'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge1'] ?>' alt='First slide'>
                                </div>
                                <div class='carousel-item'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge2'] ?>' alt='Second slide'>
                                </div>
                                <div class='carousel-item'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge3'] ?>' alt='Third slide'>
                                </div>
                            </div>
                            <a class='carousel-control-prev' href='#carouselExampleIndicators<?php echo $row['Numero'] ?>' role='button' data-slide='prev'>
                                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <a class='carousel-control-next' href='#carouselExampleIndicators<?php echo $row['Numero'] ?>' role='button' data-slide='next'>
                                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                    </div>
                    <div class='body-border room-txt'>
                        <h2 class='rooms-title'>Habitació <?php echo $row['Nom'] ?></h2>
                        <p><?php echo $row['Descripcio'] ?></p>
                        <a href='#' class='a' id='obrir<?php echo $row['Numero'] ?>'><span>More info</span></a>    
                    </div>
                    <div id='lightbox<?php echo $row['Numero'] ?>' class='lightbox'>
                        <h1>Contingut lightbox <?php echo $row['Numero'] ?></h1>
                        <a href='#' id='tancar<?php echo $row['Numero'] ?>' class='tancar'><i class='fas fa-times fa-3x'></i></a>
                    </div>
                </div>

                <script>
                    $('#lightbox<?php echo $row['Numero'] ?>').hide();
                    $('#obrir<?php echo $row['Numero'] ?>').click(function() {
                        $('#lightbox<?php echo $row['Numero'] ?>').show('slow');
                    });
                    $('#tancar<?php echo $row['Numero'] ?>').click(function() {
                        $('#lightbox<?php echo $row['Numero'] ?>').hide('slow');
                    });
                </script>
                <?php $counter++;
                
            } else { ?>

                <div class='p2-green-body-row'>
                    <div class='body-border room-txt'>
                        <h2 class='rooms-title'>Habitació <?php echo $row['Nom'] ?> </h2>
                        <p> <?php echo $row['Descripcio'] ?> </p>
                        <a href='#' class='a1' id='obrir<?php echo $row['Numero'] ?>'><span>More info</span></a>   
                    </div>
                    <div id='lightbox<?php echo $row['Numero'] ?>' class='lightbox'>
                        <h1>Contingut lightbox <?php echo $row['Numero'] ?></h1>
                        <a href='#' id='tancar<?php echo $row['Numero'] ?>' class='tancar'><i class='fas fa-times fa-3x'></i></a>
                    </div>
                    <div class='body-border'>
                        <div id='carouselExampleIndicators<?php echo $row['Numero'] ?>' class='carousel slide' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='0' class='active'></li>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='1'></li>
                                <li data-target='#carouselExampleIndicators<?php echo $row['Numero'] ?>' data-slide-to='2'></li>
                            </ol>
                            <div class='carousel-inner'>
                                <div class='carousel-item active'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge1'] ?>' alt='First slide'>
                                </div>
                                <div class='carousel-item'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge2'] ?>' alt='Second slide'>
                                </div>
                                <div class='carousel-item'>
                                    <img class='d-block w-100' src='<?php echo $row['Imatge3'] ?>' alt='Third slide'>
                                </div>
                            </div>
                            <a class='carousel-control-prev' href='#carouselExampleIndicators<?php echo $row['Numero'] ?>' role='button' data-slide='prev'>
                                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <a class='carousel-control-next' href='#carouselExampleIndicators<?php echo $row['Numero'] ?>' role='button' data-slide='next'>
                                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                    </div> 
                </div>
         <script>
            $('#lightbox<?php echo $row['Numero'] ?>').hide();
            $('#obrir<?php echo $row['Numero'] ?>').click(function() {
                $('#lightbox<?php echo $row['Numero'] ?>').show('slow');
            });
            $('#tancar<?php echo $row['Numero'] ?>').click(function() {
                $('#lightbox<?php echo $row['Numero'] ?>').hide('slow');
            });
            </script>
        <?php    $counter++;
            }
        }
        ?>
    </div>
<footer>
    <?php
        include "foot.php";
    ?>
</footer>

<script src="script.js">

</script>
</body>

</html>