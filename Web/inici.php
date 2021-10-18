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
     $( "#arrivaldate" ).datepicker();
     } );
     $( function() {
     $( "#departuredate" ).datepicker();
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
          <img src="Imatges/foto4.jpg">
          <div class="slider-form">
              <div class="slider-column-items">
          <h3 class="slider-form-items">Arrivada</h3>
          <input type="text" id="arrivaldate" placeholder="01/05/1999">
            </div>
            <div class="slider-column-items">
          <h3 class="slider-form-items">Sortida</h3>
          <input type="text" id="departuredate" placeholder="01/05/1999">
            </div>
            <div class="slider-column-items">
          <h3 class="slider-form-items">Habitacions</h3>
            <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
            <div class="slider-column-items">
          <h3 class="slider-form-items">Persones</h3>
          <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
            </div> 
            <div class="slider-column-items">
                <a href="#" class="a2">Comprovar disponibilitat</a>
            </div>
        </div>
    </div>
    <div class="p1-body-container">
            <div class="p1-div1">
                <h3>CONTROLEM EL PH DE LA TEVA AIGUA!</h3>
                <img src="Habitacions/Extras/24.jpg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita.</p>
            </div>
            <div class="p1-div1">
                <h3>VISTES DE LA PARRA!</h3>
                <img src="Habitacions/Extras/23.jpg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita.</p>
            </div> 
     </div>
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11808.903015056347!2d2.9646852!3d42.2737041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1sca!2ses!4v1634578229030!5m2!1sca!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     <footer>
    <?php
        include "foot.php";
    ?>
</footer>
<script href="script.js"></script>
</body>
</html>