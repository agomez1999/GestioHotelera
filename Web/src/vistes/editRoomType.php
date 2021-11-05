<html>	 	 
 	<head>	 
 	 	<title> Practice Web </title>
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
        <form class="login" method="post" action="index.php?r=CRUDhabitacions">
        <p>Edit</p>
            <input type="hidden" name="r" value="mEditRoomType">
            <input type="hidden" name="Numero" value="<?php echo $_GET['id'] ?>">
            <input type="text" name="Tipo" placeholder="Tipo">
            <input type="number" name="Preu" placeholder="Preu">
            <input type="submit" class="send" name="enviar" value="Edit">
        </form>
 	</body>	 
</html>
