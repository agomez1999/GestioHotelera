<html>	 	 
 	<head>	 
 	 	<title> Hotel Trampolín </title>
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
        <form class="login" method="post" action="index.php?r=CRUDreserves">
        <p>Edit</p>
            <input type="hidden" name="r" value="meditReserva">
            <input type="hidden" name="Id" value="<?= $_GET['id'] ?>">
            <input type="date" name="Arrivada" value="<?= $llistaReserves['Arrivada'] ?>">
            <input type="date" name="Sortida" value="<?= $llistaReserves['Sortida'] ?>">
            <input type="number" name="Persones" value="<?= $llistaReserves['Persones'] ?>">
            <input type="number" name="Tipo" value="<?= $llistaReserves['TipoHabitacio'] ?>">
            <input type="submit" class="send" name="enviar" value="Edit">
            <input type="reset" class="send" name="reset" value="Reset">
        </form>
 	</body>	 
</html>