<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>jQuery UI Datepicker - Default functionality</title>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
     <script>
     $( function() {
     $( "#datepicker" ).datepicker();
     } );
     </script>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <script>
     let nav = document.getElementById('home');
     nav.classList.add('active');
     </script>
    <div class="slider-container">
          <img src="Imatges/foto3.jpg">
          <div class="slider-form">
          <p>Date: <input type="text" id="datepicker"></p>
          </div>
    </div>
    <div class="p1-body-container">

               <div class="p1-div1">
                    <img src="Imatges/foto2.jpg">
               </div>
               <div class="p1-div2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate varius elit quis vestibulum. Aenean at libero non neque rutrum malesuada nec eu dolor. Maecenas pulvinar velit a enim ullamcorper bibendum. Nulla nec ligula vel dui ultricies fringilla. Quisque tempor posuere diam a convallis. In sed lorem at turpis blandit fringilla. Nam tempus vitae libero faucibus maximus. Maecenas id nisi aliquet, auctor dolor non, rhoncus massa. Etiam malesuada sollicitudin elit, at bibendum quam consequat et. Sed lacus arcu, sagittis nec pharetra eget, venenatis id nibh.</p>
               </div> 

     </div>
     <footer>
    <?php
        include "foot.php";
    ?>
</footer>
<script href="script.js"></script>
</body>
</html>