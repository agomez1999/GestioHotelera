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
     let nav = document.getElementById('contact');
     nav.classList.add('active');
     </script>
    <div class="p3-body-container">
        <form method="post">
            <div class="contact-body-row">
                <input type="text" name="name" class="form f1" placeholder="Name" required>
            </div>
            <div class="contact-body-row">
                <input type="text" name="surname" class="form f1" placeholder="Surname" required>
            </div>
            <div class="contact-body-row">
                <input type="email" name="email" class="form f1" placeholder="Email" required>
            </div>
            <div class="contact-body-row">
                <textarea name="message">Your message here.</textarea>
            </div>
            <div class="contact-body-row">
                <input type="submit" class="f1" name="send">
            </div>
        </form>
        <?php
            include "dades.php";
        ?>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2255688067894!2d2.9624965149576226!3d42.273708048543966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1sca!2ses!4v1634205262146!5m2!1sca!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
     </div>
<script href="script.js"></script>
</body>
<footer>
    <?php
        include "foot.php";
    ?>
</footer>
</html>