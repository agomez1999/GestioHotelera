<link href="../public/styles/style.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="header-container">
     <div>

     <h3 class="title" style="margin:30px; font-weight:bold;">Hotel Trampolín</h3>

     <?php 
     if (isset($_SESSION["login"])) {

          $user = $_SESSION["login"]["usuari"]
     ?>

     <div class="dropdown login-text">
          <button class="dropbtn">
               <?php echo $user ?> <i class="fas fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
               <a class="dropdown-item" href="index.php?r=login">Canviar sessió</a>
               <a class="dropdown-item" href="index.php?r=closeSession">Tancar sessió</a>
               <?php if ($_SESSION["login"]["rol"] == 1) { ?>
                    <a class="dropdown-item" href="index.php?r=CRUDusuaris">Gestió users</a>
                    <a class="dropdown-item" href="index.php?r=CRUDhabitacions">Gestió habitacions</a>
                    <a class="dropdown-item" href="index.php?r=CRUDreserves">Gestió reserves</a>
               <?php } } else { ?>
                    <a class="login-text" href="index.php?r=login">Iniciar sessió</a>
                    <?php } ?>
          </div>
     </div>
     </div>
     <div class="topnav">
          <div id="myLinks" class="header-nav">
               <a id="home" href="index.php">Inici</a>
               <a id="hotel" href="index.php?r=manteniment">Hotel</a>
               <a id="rooms" href="index.php?r=rooms">Habitacions</a>
               <a id="contact" href="index.php?r=contact">Contacte</a>
          </div>
     </div>
</div>
