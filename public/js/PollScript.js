function createPoll(){
  var table = document.getElementsByTagName('table')[0].getElementsByTagName('tbody')[0];
  table.innerHTML = table.innerHTML +
  '<tr>' +
  '<td colspan="2">' +
  '<form method="post">' +
  '<input type="text" name="name_poll" class="form-control" placeholder="Nombre del Kahoot"/>' +
  '<input type="submit" value="Crear" class="btn btn-primary float-right">' +
  '</form>' +
  '</td>'+
  '</tr>';
}
