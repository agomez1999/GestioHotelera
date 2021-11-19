<html>	 	 
 	<head>	 
 	 	<title> Practice Web </title>
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
        <form class="login" method="post" action="index.php?r=CRUDhabitacions">
        <p>New</p>
            <input type="hidden" name="r" value="mNewRoomType">
            <input type="number" name="Numero" placeholder="Numero">
            <input type="text" name="Tipo" placeholder="Tipo">
            <input type="number" name="nOcupants" placeholder="nOcupants">
            <input type="number" name="metres" placeholder="Metres">
            <input type="number" name="Preu" placeholder="Preu">
            <input type="submit" class="send" name="enviar" value="Add">
        </form>
 	</body>	 
</html>
