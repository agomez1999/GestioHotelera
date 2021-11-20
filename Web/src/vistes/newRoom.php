<html>	 	 
 	<head>	 
 	 	<title> Hotel Trampolín | Nova Habitació</title>
          <!-- CUSTOM CSS -->
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>	 
 	<body>  
     <form class="login" method="post" action="index.php">
     <p>Add</p>
            <input type="hidden" name="r" value="mNewRoom">
            <input type="number" name="Numero" placeholder="Numero">
            <input type="number" name="Tipo" placeholder="Tipo" min="0" max="3">
            <input type="text" name="Descripcio" placeholder="Descripcio">
            <input type="text" name="Serveis" placeholder="Serveis">
            <input type="text" name="Imatge1" placeholder="Imatge1">
            <input type="text" name="Imatge2" placeholder="Imatge2">
            <input type="text" name="Imatge3" placeholder="Imatge3">
            <input type="submit" class="send" name="enviar" value="Add">
        </form>
 	</body>	 
</html>