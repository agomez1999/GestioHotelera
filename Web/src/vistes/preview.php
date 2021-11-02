<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Hotel Trampolín</title>
     <!-- CSS -->
     <link href="../style.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="../public/styles/preview_style.css" type="text/css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    include "nav.php";
?>
    <script>
     let nav = document.getElementById('rooms');
     nav.classList.add('active');
     </script>
    <div class="p2-body-container animated bounceInUp">
    <?php

                <div class='p2-gray-body-row'>
                    

                    
                </div>

                <script>
                    $('#lightbox<?php echo $row['id'] ?>').hide();
                    $('#obrir<?php echo $row['id'] ?>').click(function() {
                        $('#lightbox<?php echo $row['id'] ?>').show('slow');
                    });
                    $('#tancar<?php echo $row['id'] ?>').click(function() {
                        $('#lightbox<?php echo $row['id'] ?>').hide('slow');
                    });
                </script>
                <?php $counter++;
                
            
         <script>
            $('#lightbox<?php echo $row['id'] ?>').hide();
            $('#obrir<?php echo $row['id'] ?>').click(function() {
                $('#lightbox<?php echo $row['id'] ?>').show('slow');
            });
            $('#tancar<?php echo $row['id'] ?>').click(function() {
                $('#lightbox<?php echo $row['id'] ?>').hide('slow');
            });
            </script>
        <?php   
            }
        }
        ?>
    </div>
<footer>
    <?php
        include "foot.php";
    ?>
</footer>

<script src="script.js">

</script>
</body>

</html>