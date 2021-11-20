<!DOCTYPE html>
<!-- CUSTOM CSS -->
<link href="../public/styles/index_style.css" rel="stylesheet" type="text/css">
<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- JQUERY MISSATGE AMB EFECTE FADE -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <!-- CALENDARI -->
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
     <script>
         // CALENDARI DATA ARRIVADA
     $( function() {
     $( "#arrivaldate" ).datepicker({
        dateFormat: "yy-mm-dd"
     });
     } );
        // CALENDARI DATA SORTIDA
     $( function() {
     $( "#departuredate" ).datepicker({
        dateFormat: "yy-mm-dd"
     });
     } );
     </script>
</head>
<body>
    

    
        <?php include "navmobile.php";?>
     

    <script>
     let nav = document.getElementById('home');
     nav.classList.add('active');
     </script>
    <div class="slider-container c2 animated bounceInUp" style="background: url('../public/img/2.jpg'); background-repeat: no-repeat;">
        <form method="post" action="index.php">
        <div class="slider-form">
              <div id="slide1" class="slider-column-items">
                <h3 class="slider-form-items">Arrivada</h3>
                <input type="hidden" name="r" value="preview">
                <input type="text" id="arrivaldate" name="arrivaldate" placeholder="yyyy/mm/dd" autocomplete="off" spellcheck="false" required>
            </div>
            <div id="slide2" class="slider-column-items">
                <h3 class="slider-form-items">Sortida</h3>
                <input type="text" id="departuredate" name="departuredate" placeholder="yyyy/mm/dd" autocomplete="off" spellcheck="false" required>
            </div>
                <div id="slide3" class="slider-column-items">
                <h3 class="slider-form-items">Persones</h3>
                    <select name="nPersones" required>
                    <option value="">-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div> 
                <div id="slide4" class="slider-column-items">
                    <input type="submit" class="a2" value="Reservar">
                </div>
            </div>
        </div>
        </form>
        <?php 
        ?>
        <div class="p1-body-container" id="body-container">
            <div class="p1-div1">
                <h3>CONTROLEM EL PH DE LA TEVA AIGUA!</h3>
                <a href="#body-container" id="obrir"><img src="../public/img/Habitacions/Extras/24.jpg"></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita.</p>
            </div>
            <div id="lightbox" class="lightbox">
                <h1>Contingut lightbox 1</h1>
                <a href="#body-container" id="tancar" class="tancar"><i class="fas fa-times fa-3x"></i></a>
            </div>
            <div class="p1-div1">
                <h3>VISTES DE LA PARRA!</h3>
                <a href="#body-container" id="obrir2"><img src="../public/img/Habitacions/Extras/23.jpg"></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita.</p>
            </div>
            <div id="lightbox2" class="lightbox">
                <h1>Contingut lightbox 2</h1>
                <a href="#body-container" id="tancar2" class="tancar"><i class="fas fa-times fa-3x"></i></a>
            </div> 
        </div>
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11808.903015056347!2d2.9646852!3d42.2737041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1sca!2ses!4v1634578229030!5m2!1sca!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     <footer>
     </div>
    <?php
        include "foot.php";
    ?>
</footer>
<script>
    // LIGHBOX 1
    $('#lightbox').hide();
    $('#obrir').click(function() {
        $('#lightbox').show('slow');
    });
    $('#tancar').click(function() {
        $('#lightbox').hide('slow');
    });
    // LIGHBOX 2
    $('#lightbox2').hide();
    $('#obrir2').click(function() {
        $('#lightbox2').show('slow');
    });
    $('#tancar2').click(function() {
        $('#lightbox2').hide('slow');
    });
    // OCULTAR CLASSE BAD
    $(document).ready(function() {
        setTimeout(function() {
            $(".bad").fadeOut(1500);
        },3000);
    });
    // OCULTAR CLASSE GOOD
    $(document).ready(function() {
        setTimeout(function() {
            $(".good").fadeOut(1500);
        },3000);
    });
</script>
</body>
</html>