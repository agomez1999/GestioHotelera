<!DOCTYPE html>
<link href="style.css" rel="stylesheet" type="text/css">
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
    <style>
        .td {
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-div">
        <!-- REGISTER -->
        <table>
            <form method="post" action="registrar.php">
                <tr>
                    <td colspan="2" valign="center">
                        <h1>Sistema de register</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Usuari</p>
                    </td>
                    <td>
                        <input type="text" name="usuariR">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contrasenya</p>
                    </td>
                    <td>
                        <input type="password" name="contrasenyaR">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="td">
                        <input type="submit" name="enviar" value="Entrar">
                    </td>
                </tr>
                
            </form>
            <!-- LOGIN -->
            <form method="post" action="validar.php">
                <tr>
                    <td colspan="2">
                        <h1>Sistema de login</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Usuari</p>
                    </td>
                    <td>
                        <input type="text" name="usuariR">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contrasenya</p>
                    </td>
                    <td>
                        <input type="password" name="contrasenyaR">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="td">
                        <input type="submit" name="enviar" value="Entrar">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>