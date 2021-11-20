<html>	 	 
 	<head>	 
 	 	<title> Hotel Trampolín | Nova Reserva </title>
          <!-- CUSTOM CSS -->
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
        <form class="login" method="post" action="index.php?r=CRUDreserves">
        <p>New</p>
            <input type="hidden" name="r" value="mNewReserva">
            <input type="date" name="Arrivada" placeholder="Arrivada">
            <input type="date" name="Sortida" placeholder="Sortida">
            <input type="number" name="Persones" placeholder="Persones">
            <input type="number" name="Tipo" placeholder="Tipo Habitació">
            <input type="submit" class="send" name="enviar" value="Add">
        </form>
 	</body>	 
</html>