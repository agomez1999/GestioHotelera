<link href="../public/styles/style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="header-container">
     <div>
          <h3 class="title">Hotel Trampolín</h3>
          <?php 
               if (isset($_SESSION["login"])) {
          ?>
          <b class="login-text"><?php echo print($_SESSION["login"]["usuari"]) ?></b>
          <a href="index.php?r=login" class="login-text" style="margin-top:25px">Cambiar sessió</a>
          <?php if ($_SESSION["login"]["rol"] == 1) { ?>
               <a href="index.php?r=CRUDusuaris" class="login-text" style="margin-top:40px">Taula users</a>
          <?php } } else { ?>
          <a class="login-text" href="index.php?r=login">Iniciar sessió</a>
          <?php } ?>
     </div>
     <div class="header-nav">
          <a id="home" href="index.php">Inici</a>
          <a id="hotel" href="index.php?r=hotel">Hotel</a>
          <a id="rooms" href="index.php?r=rooms">Habitacions</a>
          <a id="contact" href="index.php?r=contact">Contacte</a>
     </div>
</div>
<script href="script.js"></script>