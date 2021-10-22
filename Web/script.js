let BtnEdit = document.getElementById('edit')
let BtnDelete = document.getElementById('delete')
let BtnAdd = document.getElementById('add')

function editRow() {
  alert('Edit')
}

function deleteRow() {
  alert('Delete')
}

function addRow() {
  let html = '<div class="add-users">'
    html += '<form method="post" action="register_users.php">'
      html += '<input type="text" id="new-user" placeholder="Usuari" name="usrname">'
      html += '<input type="password" id="new-password" placeholder="Contrasenya" name="passwd">'
      html += '<input type="submit" class="green-btn" name="enviar" value="Login">'
    html += '</form>'
  html += '</div>'
let container = document.getElementById('container').outerHTML = html
}

function newRegister(usr, psw) {
  console.log(usr)
  console.log(psw)
}