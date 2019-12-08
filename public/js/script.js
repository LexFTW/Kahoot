window.addEventListener('load', function(){
  var form_create = document.getElementsByTagName('form')[0];
  form_create.innerHTML = '<div class="form-group">' +
  									   '<input type="text" class="form-control" name="title" placeholder="Introduce un titulo">' +
  								     '</div>' +
  								     '<div class="form-group">' +
  									   '<input type="checkbox" name="true"><label for="true">Verdadero</label>' +
  									   '<input type="checkbox" name="false"><label for="false">Falso</label>' +
  								     '</div>' +
  								     '<input type="submit" class="btn btn-primary float-right" value="Guardar">';
});
