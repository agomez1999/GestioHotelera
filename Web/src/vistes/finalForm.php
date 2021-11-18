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
            <form method="post" action="index.php?r=sendFinalForm">
                <input type="hidden" name="r" value="sendFinalForm">
                        <p>
                            <label>Nom</label>
                            <input type="text" name="Nom">
                        </p>
                        <p>
                            <label>Cognom</label>
                            <input type="text" name="Cognom">
                        </p>
                        <p>
                            <label>Personal ID</label>
                            <input type="text" name="DNI">
                        </p>
                        <p>
                            <label>Email</label>
                            <input type="mail" name="Email">
                        </p>
                        <p>
                            <label>Targeta Bancaria</label>
                            <input type="number" name="Tarjeta">
                        </p>
                        <p>
                            <label>C.P</label>
                            <input type="number" name="Codi">
                        </p>
                        <p>
                            <label>Poblacio</label>
                            <input type="text" name="Poblacio">
                        </p>
                        <p>
                            <label>Telefon</label>
                            <input type="tel" name="Telefon">
                        </p>
                        <p class="block">
                        <label>Missatge</label> 
                            <textarea name="Missatge" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
            </form>
        </div>
        <div class="form2">
            
        </div>
    </div>
        
    </div>
<?php include "foot.php" ?>    
</body>
</html>