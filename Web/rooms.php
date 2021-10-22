<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <link href="style.css" rel="stylesheet" type="text/css">
    <link href="rooms_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <script>
     let nav = document.getElementById('rooms');
     nav.classList.add('active');
     </script>
    <div class="p2-body-container animated bounceInUp">
    <?php
        include "conex_db.php";

        $query = "SELECT * FROM habitacions";
        $result = mysqli_query($conex, $query);
        $nRow = mysqli_num_rows($result);
        $counter = 0;

        while ($row = mysqli_fetch_array($result)){
            if ($counter % 2 == 0) {
                //SECCIÓ GRIS

                echo "<div class='p2-gray-body-row'>
                    <div class='body-border'>";
                //SLIDER

                echo "<div id='carouselExampleIndicators"; echo $row['id']; echo "' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='0' class='active'></li>
                        <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='1'></li>
                        <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='2'></li>
                    </ol>
                    <div class='carousel-inner'>";
                    //IMATGES SLIDER

                    echo "<div class='carousel-item active'>
                        <img class='d-block w-100' src='"; echo $row["img1"]; echo "' alt='First slide'>
                        </div>
                        <div class='carousel-item'>
                        <img class='d-block w-100' src='"; echo $row["img2"]; echo "' alt='Second slide'>
                        </div>
                        <div class='carousel-item'>
                        <img class='d-block w-100' src='"; echo $row["img3"]; echo "' alt='Third slide'>
                        </div>
                    </div>";
                    //FLETXETES SLIDER
    
                    echo "<a class='carousel-control-prev' href='#carouselExampleIndicators"; echo $row['id']; echo "'' role='button' data-slide='prev'>
                        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                        <span class='sr-only'>Previous</span>
                    </a>
                    <a class='carousel-control-next' href='#carouselExampleIndicators"; echo $row['id']; echo "'' role='button' data-slide='next'>
                        <span class='carousel-control-next-icon' aria-hidden='true'></span>
                        <span class='sr-only'>Next</span>
                    </a>
                    </div>
                </div>";
                //TEXT INFO HABITACIÓ

            echo "<div class='body-border'>
                <h2 class='rooms-title'>Habitació "; echo $row["tipus"]; echo "</h2>
                <p>"; echo $row["descripcio"]; echo "</p>
                <a href='#' class='a' id='obrir"; echo $row['id']; echo "'><span>More info</span></a>    
            </div>";
            //LIGHTBOX

            echo "<div id='lightbox"; echo $row['id']; echo "'' class='lightbox'>
                <h1>Contingut lightbox "; echo $row['id']; echo "</h1>
                <a href='#' id='tancar"; echo $row['id']; echo "' class='tancar'><i class='fas fa-times fa-3x'></i></a>
            </div>
            </div>";
            //SCRIPT LIGHTBOX

            echo "<script>
            $('#lightbox"; echo $row['id']; echo "').hide();
            $('#obrir"; echo $row['id']; echo "').click(function() {
                $('#lightbox"; echo $row['id']; echo "').show('slow');
            });
            $('#tancar"; echo $row['id']; echo "').click(function() {
                $('#lightbox"; echo $row['id']; echo "').hide('slow');
            });
            </script>";
            $counter++;
            
            } else {
                //SECCIÓ BLAVA

                echo "<div class='p2-green-body-row'>
            <div class='body-border'>";
            //TEXT INFO HABITACIÓ
                
                echo "<h2 class='rooms-title'>Habitació "; echo $row["tipus"]; echo "</h2>
                <p>"; echo $row["descripcio"]; echo "</p>
                <a href='#' class='a1' id='obrir"; echo $row['id']; echo "'><span>More info</span></a>   
            </div>";
            //LIGHTBOX

            echo "<div id='lightbox"; echo $row['id']; echo "'' class='lightbox'>
                <h1>Contingut lightbox "; echo $row['id']; echo "</h1>
                <a href='#' id='tancar"; echo $row['id']; echo "' class='tancar'><i class='fas fa-times fa-3x'></i></a>
            </div>
            <div class='body-border'>";
            //SLIDER

            echo "<div id='carouselExampleIndicators"; echo $row['id']; echo "'' class='carousel slide' data-ride='carousel'>
            <ol class='carousel-indicators'>
                <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='0' class='active'></li>
                <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='1'></li>
                <li data-target='#carouselExampleIndicators"; echo $row['id']; echo "'' data-slide-to='2'></li>
            </ol>
            <div class='carousel-inner'>";
            //SLIDER IMATGES

            echo "<div class='carousel-item active'>
                <img class='d-block w-100' src='"; echo $row["img1"]; echo "' alt='First slide'>
                </div>
                <div class='carousel-item'>
                <img class='d-block w-100' src='"; echo $row["img2"]; echo "' alt='Second slide'>
                </div>
                <div class='carousel-item'>
                <img class='d-block w-100' src='"; echo $row["img3"]; echo "' alt='Third slide'>
                </div>
            </div>";
            //SLIDER FLETXETES

            echo "<a class='carousel-control-prev' href='#carouselExampleIndicators"; echo $row['id']; echo "'' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next' href='#carouselExampleIndicators"; echo $row['id']; echo "'' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
            </div>
            </div> 
            </div>";
            //LIGHTBOX SCRIPT
            echo "<script>
            $('#lightbox"; echo $row['id']; echo "').hide();
            $('#obrir"; echo $row['id']; echo "').click(function() {
                $('#lightbox"; echo $row['id']; echo "').show('slow');
            });
            $('#tancar"; echo $row['id']; echo "').click(function() {
                $('#lightbox"; echo $row['id']; echo "').hide('slow');
            });
            </script>";
            $counter++;
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