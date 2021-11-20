<html>	 	 
 	<head>	 
 	 	<title> Hotel Trampolín | Editar Habitació </title>
          <!-- CUSTOM CSS -->
          <link href="../public/styles/login_style.css" rel="stylesheet" type="text/css">
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
        <form class="login" method="post" action="index.php?r=CRUDhabitacions">
        <p>Edit</p>
            <input type="hidden" name="r" value="meditHabitacions">
            <input type="number" name="Numero" value="<?php echo $_GET['id'] ?>">
            <input type="number" name="Tipo" value="<?php echo $llistaHabitacions['Tipo'] ?>">
            <input type="text" name="Descripcio" value="<?php echo $llistaHabitacions['Descripcio'] ?>">
            <input type="text" name="Serveis" value="<?php echo $llistaHabitacions['Serveis'] ?>">
            <input type="text" name="Imatge1" value="<?php echo $llistaHabitacions['Imatge1'] ?>">
            <input type="text" name="Imatge2" value="<?php echo $llistaHabitacions['Imatge2'] ?>">
            <input type="text" name="Imatge3" value="<?php echo $llistaHabitacions['Imatge3'] ?>">
            <input type="submit" class="send" name="enviar" value="Edit">
            <input type="reset" class="send" name="reset" value="Reset">
        </form>
 	</body>	 
</html>