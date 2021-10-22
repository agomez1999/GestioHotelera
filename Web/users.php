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
    <div id="container">
    <table id="users-table">
        <tr>
            <td class="title">#</td>
            <td class="title">Usuari</td>
            <td class="title">Contrasenya</td>
            <td colspan="2" class='table-btn'><button id="add" class="green-btn" onclick='addRow()'><i class="far fa-plus-square"></i></button></td>
        </tr>
    <?php  
        while ($row = mysqli_fetch_array($result)){
        echo"<tr>
                <td>";echo $row["id"]; echo "</td>
                <td>";echo $row["usuari"]; echo "</td>
                <td>";echo $row["contrasenya"]; echo "</td>
                <td class='table-btn'><button id='edit' onclick='editRow()'><i class='far fa-edit'></i></button></td>
                <td class='table-btn'><button id='delete' onclick='deleteRow()'><i class='far fa-trash-alt'></i></button></td>
            </tr>";
        }
    ?>
    </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>