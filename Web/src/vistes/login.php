<html>	 	 
 	<head>	 
 	 	<title> Hotel Trampolín | Formulari de Login </title>
          <!-- CUSTOM CSS -->
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>	 
 	<body>
        <form class="login" method="post" action="index.php">
        <p>Login</p>
            <input type="hidden" name="r" value="dologin">
            <input type="text" name="usrname" placeholder="Username">
            <input type="password" name="passwd" placeholder="Password">
            <input type="submit" class="send" name="enviar" value="Login">
            <a class="register-link" href="index.php?r=signup">Register</a>
        </form>
 	</body>	 
</html>
