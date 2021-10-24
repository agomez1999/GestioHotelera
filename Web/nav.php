<link href="../style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<div class="header-container">
     <div>
          <?php session_start(); ?>
          <h3 class="title">Hotel Trampolín</h3>
          <?php 
               if (isset($_SESSION['usrname'])) {
          ?>
          <a class="login-text" href="../Login/login_form.php"><?php echo $_SESSION['usrname'] ?></a>
          <?php } else { ?>
          <a class="login-text" href="../Login/login_form.php">Iniciar sessió</a>
          <?php } ?>
     </div>
     <div class="header-nav">
          <a id="home" href="../index/inici.php">Inici</a>
          <a id="hotel" href="../hotel/aboutus.php">Hotel</a>
          <a id="rooms" href="../rooms/rooms.php">Habitacions</a>
          <a id="contact" href="../contacte/contact.php">Contacte</a>
     </div>
</div>
<script href="script.js"></script>