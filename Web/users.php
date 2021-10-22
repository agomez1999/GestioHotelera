<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="users_style.css" type="text/css">
    <title>Hotel Trampolín | Users</title>
</head>
<body>
    <?php
        include "conex_db.php";

        $query = "SELECT * FROM loginDB";
        $result = mysqli_query($conex, $query);
    ?>
    <table>
        <tr>
            <td>#</td>
            <td>Usuari</td>
            <td>Contrasenya</td>
        </tr>
    <?php  
        while ($row = mysqli_fetch_array($result)){
        echo"<tr>
                <td>";echo $row["id"]; echo "</td>
                <td>";echo $row["usuari"]; echo "</td>
                <td>";echo $row["contrasenya"]; echo "</td>
                <td><a id=''><i class='far fa-edit'></i></a></td>
                <td><a><i class='far fa-trash-alt'></i></a></td>
            </tr>";
        }
    ?>
    </table>
    <a><i class="far fa-plus-square"></i></a>
</body>
</html>