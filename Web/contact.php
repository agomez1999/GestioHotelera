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
                <input type="text" name="name" class="form f1" placeholder="Name">
            </div>
            <div class="contact-body-row">
                <input type="text" name="surname" class="form f1" placeholder="Surname">
            </div>
            <div class="contact-body-row">
                <input type="email" name="email" class="form f1" placeholder="Email">
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
     </div>
<script href="script.js"></script>
</body>
</html>