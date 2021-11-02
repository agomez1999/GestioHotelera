<html>	 	 
 	<head>	 
 	 	<title> Practice Web </title>
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>	 
 	<body>  
     <form class="login" method="post" action="index.php">
     <p>Add</p>
            <input type="hidden" name="r" value="mNewRoom">
            <input type="text" name="tipus" placeholder="Tipus">
            <input type="text" name="nom" placeholder="Nom">
            <input type="number" name="quantitat" placeholder="Quantitat">
            <input type="text" name="descripcio" placeholder="Descripcio">
            <input type="text" name="img1" placeholder="img1">
            <input type="text" name="img2" placeholder="img2">
            <input type="text" name="img3" placeholder="img3">
            <input type="submit" class="send" name="enviar" value="Add">
        </form>
 	</body>	 
</html>