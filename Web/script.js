let BtnEdit = document.getElementById('edit')
let BtnDelete = document.getElementById('delete')
let BtnAdd = document.getElementById('add')

function editRow() {
  alert('Edit')
}

function deleteRow(valor) {
  console.log(valor)
  let html = '<?php'
    html += 'include "conex_db.php";'
    html += `$query = "DELETE FROM loginDB WHERE loginDB.id = ${valor}";`
    html += '$result = mysqli_query($conex, $query);'
    html += 'include("users.php");'
    html += '<div class="good"><h3>DELETED SUCCEFULLY</h3></div>'

  let container = document.body.outerHTML = html
}

function addRow() {
  let html = '<div class="add-users">'
    html += '<form method="post" action="register_users.php">'
      html += '<input type="text" id="new-user" placeholder="Usuari" name="usrname">'
      html += '<input type="password" id="new-password" placeholder="Contrasenya" name="passwd">'
      html += '<input type="submit" class="green-btn" name="enviar" value="Register">'
    html += '</form>'
  html += '</div>'
let container = document.getElementById('container').outerHTML = html
}