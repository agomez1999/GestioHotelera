<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <link href="style.css" rel="stylesheet" type="text/css">
    <link href="rooms_style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <script>
     let nav = document.getElementById('rooms');
     nav.classList.add('active');
     </script>
    <div class="p2-body-container">
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

<footer>
    <?php
        include "foot.php";
    ?>
</footer>

<script src="script.js">

</script>
</body>

</html>