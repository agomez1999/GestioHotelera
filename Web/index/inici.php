<!DOCTYPE html>
<link href="inici_style.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
        include "conex_db.php";

        if (isset($_SESSION)) {
            session_destroy();
        }

        session_start();

        $rol = $_SESSION["rol"];     
        $user = $_SESSION['usrname'];

        if (isset($_SESSION['rol'])) {
            if ($rol != 1) {
                include "../nav.php";
            } else {
                include "../adminNav.php";
            }
        } else {
            include "../nav.php";
        }

        
    ?>
    <script>
     let nav = document.getElementById('home');
     nav.classList.add('active');
     </script>
    <div class="slider-container c2 animated bounceInUp" style="background: url('../Imatges/2.jpg'); background-repeat: no-repeat;">
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
                    <a href="#" class="a2">Reservar</a>
                </div>
            </div>
        </div>
        <?php 
        ?>
        <div class="p1-body-container" id="body-container">
            <div class="p1-div1">
                <h3>CONTROLEM EL PH DE LA TEVA AIGUA!</h3>
                <a href="#body-container" id="obrir"><img src="../Habitacions/Extras/24.jpg"></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, expedita.</p>
            </div>
            <div id="lightbox" class="lightbox">
                <h1>Contingut lightbox 1</h1>
                <a href="#body-container" id="tancar" class="tancar"><i class="fas fa-times fa-3x"></i></a>
            </div>
            <div class="p1-div1">
                <h3>VISTES DE LA PARRA!</h3>
                <a href="#body-container" id="obrir2"><img src="../Habitacions/Extras/23.jpg"></a>
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
        include "../foot.php";
    ?>
</footer>
<script>
    //LIGHBOX 1
    $('#lightbox').hide();
    $('#obrir').click(function() {
        $('#lightbox').show('slow');
    });
    $('#tancar').click(function() {
        $('#lightbox').hide('slow');
    });
    //LIGHBOX 2
    $('#lightbox2').hide();
    $('#obrir2').click(function() {
        $('#lightbox2').show('slow');
    });
    $('#tancar2').click(function() {
        $('#lightbox2').hide('slow');
    });
</script>
<script href="script.js"></scrip>
</body>
</html>