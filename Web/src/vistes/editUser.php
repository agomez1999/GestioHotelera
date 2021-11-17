<html>	 	 
 	<head>	 
 	 	<title> Practice Web </title>
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>	 
 	<body>
         
         
        <form class="login" method="post" action="index.php?r=CRUDusuaris">
        <p>Edit</p>
            <input type="hidden" name="r" value="mEditUser">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="text" name="usrname" value="<?php echo $llistaUsuaris["usuari"]  ?>">
            <input type="text" name="passwd" value="<?php echo $llistaUsuaris["contrasenya"]  ?>">
            <input type="number" name="rol" value="<?php echo $llistaUsuaris["rol"]  ?>" min="1" max="3">
            <input type="submit" class="send" name="enviar" value="Modify">
            <input type="reset" class="send" name="reset" value="Reset">
        </form>
 	</body>	 
</html>
