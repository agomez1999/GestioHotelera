<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <link href="style.css" rel="stylesheet" type="text/css">
    <link href="rooms_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <div class="p2-gray-body-row">
                <div class="body-border">
                    <h2 class="rooms-title">Individual room</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate varius elit quis vestibulum. Aenean at libero non neque rutrum malesuada nec eu dolor. Maecenas pulvinar velit a enim ullamcorper bibendum. Nulla nec ligula vel dui ultricies fringilla. Quisque tempor posuere diam a convallis. In sed lorem at turpis blandit fringilla. Nam tempus vitae libero faucibus maximus. Maecenas id nisi aliquet, auctor dolor non, rhoncus massa. Etiam malesuada sollicitudin elit, at bibendum quam consequat et. Sed lacus arcu, sagittis nec pharetra eget, venenatis id nibh.</p>
                    <a href="#" class="a"><span>More info</span></a>
                </div>
                <div class="body-border">

                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img class="slider-img" src="Habitacions\Deluxe Room\4.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="Habitacions\Deluxe Room\5.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="Habitacions\Deluxe Room\6.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                </div> 
            </div>

            <div class="p2-green-body-row">
                <div class="body-border">
                <img href="">
                </div>
                <div class="body-border">
                    <h2 class="rooms-title">Double room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate varius elit quis vestibulum. Aenean at libero non neque rutrum malesuada nec eu dolor. Maecenas pulvinar velit a enim ullamcorper bibendum. Nulla nec ligula vel dui ultricies fringilla. Quisque tempor posuere diam a convallis. In sed lorem at turpis blandit fringilla. Nam tempus vitae libero faucibus maximus. Maecenas id nisi aliquet, auctor dolor non, rhoncus massa. Etiam malesuada sollicitudin elit, at bibendum quam consequat et. Sed lacus arcu, sagittis nec pharetra eget, venenatis id nibh.</p>
                    <a href="#" class="a1"><span>More info</span></a>    
                </div> 
            </div>
            <div class="p2-gray-body-row">
                <div class="body-border">
                <h2 class="rooms-title">Double room with views</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate varius elit quis vestibulum. Aenean at libero non neque rutrum malesuada nec eu dolor. Maecenas pulvinar velit a enim ullamcorper bibendum. Nulla nec ligula vel dui ultricies fringilla. Quisque tempor posuere diam a convallis. In sed lorem at turpis blandit fringilla. Nam tempus vitae libero faucibus maximus. Maecenas id nisi aliquet, auctor dolor non, rhoncus massa. Etiam malesuada sollicitudin elit, at bibendum quam consequat et. Sed lacus arcu, sagittis nec pharetra eget, venenatis id nibh.</p>
                <a href="#" class="a"><span>More info</span></a>    
            </div>
                <div class="body-border">
                <img href="">
                </div> 
            </div>
    </div>
    <div>
        <?php
        include "conex_db.php";

        $query = "SELECT * FROM habitacions";
        $result = mysqli_query($conex, $query);
        $nRow = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            echo "<div class='p2-green-body-row'>
            <div class='body-border'>
            <div id='carouselExampleSlidesOnly' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                    <img class='d-block w-100' src=' '' alt='First slide'>
                    </div>
                    <div class='carousel-item active'>
                    <img class='d-block w-100' src='...'' alt='First slide'>
                    </div>
                    <div class='carousel-item active'>
                    <img class='d-block w-100' src='...'' alt='First slide'>
                    </div>
                </div>
                </div>
            </div>
            <div class='body-border'>
                <h2 class='rooms-title'>"; echo $row["tipus"]; echo "</h2>
                <p>"; echo $row["descripcio"]; echo "</p>
                <a href='#' class='a1'><span>More info</span></a>    
            </div> 
        </div>";
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