<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../public/styles/style.css" rel="stylesheet" type="text/css">
    <link href="../public/styles/finalForm_style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "navmobile.php" ?>
    <div class="grid-container">

    <div class="contact-wrapper">
        <div class="contact-form">
            <form action="">
                        <p>
                            <label for="nom">Nom</label>
                            <input type="text" name="Nom" id="nom">
                        </p>
                        <p>
                            <label for="cognom">Cognom</label>
                            <input type="text" name="Cognom" id="cognom">
                        </p>
                        <p>
                            <label for="dni">Personal ID</label>
                            <input type="text" name="DNI/ID" id="dni">
                        </p>
                        <p>
                            <label for="mail">Email</label>
                            <input type="email" name="Email" id="mail">
                        </p>
                        <p>
                            <label for="tb">Targeta Bancaria</label>
                            <input type="text" name="Targeta Bancaria" id="tb">
                        </p>
                        <p>
                            <label for="cp">C.P</label>
                            <input type="text" name="codi postal" id="cp">
                        </p>
                        <p>
                            <label for="Poblacio">Poblacio</label>
                            <input type="text" name="Poblacio" id="Poblacio">
                        </p>
                        <p>
                            <label for="Telefon">Telefon</label>
                            <input type="tel" name="Telefon" id="Telefon">
                        </p>
                        <p class="block">
                        <label for="message">Missatge</label> 
                            <textarea name="message" rows="3" id="message"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
            </form>
        </div>
    </div>
    <div class="form2">
            <div class="form2-int">
                <h1 class="roomtitle">Aqui nom de habitacio :)</h1>
                <h2 class="resdate">From DATA XY to DAA YX</h2>
                <h2 class="nocupants">Reservat per: X persones</h2>
                <h1 class="fullprice">Total Price: 999€</h1>
            </div>
        </div>
    </div>
<?php include "foot.php" ?>    
</body>
</html>