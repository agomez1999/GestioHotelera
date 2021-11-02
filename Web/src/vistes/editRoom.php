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
            <input type="hidden" name="r" value="mEditRoom">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="text" name="tipo" placeholder="tipo">
            <input type="text" name="nom" placeholder="nom">
            <input type="number" name="quantitat" placeholder="quantitat" min="1">
            <input type="text" name="descripcio" placeholder="descripcio">
            <input type="text" name="img1" placeholder="img1">
            <input type="text" name="img2" placeholder="img2">
            <input type="text" name="img3" placeholder="img3">
            <input type="submit" class="send" name="enviar" value="Add">
        </form>
 	</body>	 
</html>
