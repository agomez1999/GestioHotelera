<html>	 	 
 	<head>	 
 	 	<title> Practice Web </title>
          <link href="main.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 	</head>	 
 	<body>  
        <div class="login-form">
        <table>
        <td colspan="2" class="td">
            <h3 class="title">Register</h3>        
        </td>
        <form method="post" action="register.php">
            <tr>
                <td>
                    <p>Username</p>
                </td>
                <td>
                    <input type="text" name="usrname">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Password</p>
                </td>
                <td>
                    <input type="password" name="passwd">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="td">
                    <input type="submit" name="enviar" value="Register">
                </td>
            </tr>
        </form>
       </table>
        </div>
 	</body>	 
</html>