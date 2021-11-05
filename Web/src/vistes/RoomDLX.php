<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../public/styles/style.css" rel="stylesheet" type="text/css">
    <link href="../public/styles/preview_style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "nav.php" ?>

    <div class="grid-container">

        <div class='body-border'>
            <div id='carouselExampleIndicators<?php echo $row['id'] ?>' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                    <li data-target='#carouselExampleIndicators<?php echo $row['id'] ?>' data-slide-to='0' class='active'></li>
                    <li data-target='#carouselExampleIndicators<?php echo $row['id'] ?>' data-slide-to='1'></li>
                    <li data-target='#carouselExampleIndicators<?php echo $row['id'] ?>' data-slide-to='2'></li>
                </ol>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <img class='d-block w-100' src='<?php echo $row['img1'] ?>' alt='First slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='<?php echo $row['img2'] ?>' alt='Second slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='<?php echo $row['img3'] ?>' alt='Third slide'>
                    </div>
                </div>
                <a class='carousel-control-prev' href='#carouselExampleIndicators<?php echo $row['id'] ?>' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleIndicators<?php echo $row['id'] ?>' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>
        
    </div>
<?php include "foot.php" ?>    
</body>
</html>