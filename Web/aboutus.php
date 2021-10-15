<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
</head>
<body>
    <?php 
        include "nav.php";
    ?>
    <script>
     let nav = document.getElementById('hotel');
     nav.classList.add('active');
     </script>
    <div class="body-container">
          <div class="body-border">
               <img src="Imatges/foto2.jpg">
          </div>
          <div class="body-border">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate varius elit quis vestibulum. Aenean at libero non neque rutrum malesuada nec eu dolor. Maecenas pulvinar velit a enim ullamcorper bibendum. Nulla nec ligula vel dui ultricies fringilla. Quisque tempor posuere diam a convallis. In sed lorem at turpis blandit fringilla. Nam tempus vitae libero faucibus maximus. Maecenas id nisi aliquet, auctor dolor non, rhoncus massa. Etiam malesuada sollicitudin elit, at bibendum quam consequat et. Sed lacus arcu, sagittis nec pharetra eget, venenatis id nibh.</p>
          </div>     
     </div>
     <footer>
    <?php
        include "foot.php";
    ?>
</footer>
</body>

</html>