<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
</head>
<body>
    <div class="login-div">
        <!-- REGISTER -->
        <form method="post" action="registrar.php">
            <h1>Sistema de Register</h1>
            <p>Usuari<input type="text" name="usuariR"></p>
            <p>Contrasenya<input type="password" name="contrasenyaR"></p>
            <input type="submit" name="enviar" value="Entrar">
        </form>
        <!-- LOGIN -->
        <form method="post" action="validar.php">
            <h1>Sistema de login</h1>
            <p>Usuari<input type="text" name="usuari"></p>
            <p>Contrasenya<input type="password" name="contrasenya"></p>
            <input type="submit" name="enviar" value="Entrar">
        </form>
    </div>
</body>
</html>