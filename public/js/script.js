window.addEventListener('load', function(){
  generateForm();
});

function generateForm(){
  var form_create = document.getElementsByTagName('form')[0];
  form_create.innerHTML = '<div class="form-group">' +
                       '<input type="text" class="form-control mb-4" name="survey" placeholder="Survey oumama">' +
                       '<input type="text" class="form-control" name="title" placeholder="Introduce un titulo">' +
                       '</div>' +
                       '<div class="form-group">' +
                       '<div class="row">' +
       									'<div class="col">' +
       										'<div class="media">' +
       										  '<div class="align-self-center mr-3" style="background: red; color:white">' +
       										  	'<i class="fas fa-square" style="padding: 15px"></i>' +
       										  '</div>' +
       										  '<div class="media-body align-self-center ">' +
       										    '<h5 class="mt-0" style="display: inline-block">Falso</h5>' +
       												'<input type="checkbox" name="false" class="float-right">' +
       										  '</div>' +
       										'</div>' +
       									'</div>' +
       									'<div class="col">' +
       										'<div class="media">' +
       										  '<div class="align-self-center mr-3" style="background: lightgreen; color:white">' +
       										  	'<i class="fas fa-circle" style="padding: 15px"></i>' +
       										  '</div>' +
       										  '<div class="media-body align-self-center ">' +
       										    '<h5 class="mt-0" style="display: inline-block">Verdadero</h5>' +
       												'<input type="checkbox" name="true" class="float-right">' +
       										  '</div>' +
       										'</div>' +
       									'</div>' +
       								'</div>' +
                       '</div>' +
                       '<input type="submit" class="btn btn-primary float-right" value="Guardar">';
}
