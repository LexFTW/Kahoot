function generateFormQuestion(val){
  if(val == 1){
    generateTrueOrFalseQuestion();
  }else if(val == 2){
    generateMultiChoiceQuestion();
  }
}

function generateTrueOrFalseQuestion(){
  var main = document.getElementById('question__main');
  main.innerHTML =
  '<form method="post"> ' +
    '<div class="row">' +
      '<div class="form-group col-12">' +
        '<div class="input-group mb-3 poll__group-title">' +
          '<div class="input-group-prepend">' +
            '<span class="input-group-text poll__input-group poll__input-group-title" id="question-addon">' +
              '<i class="fas fa-question"></i>' +
            '</span>' +
          '</div>' +
          '<input type="text" name="question" class="form-control poll__input-form-control poll__input-form-control-title" placeholder="Título de la Pregunta" aria-label="Título de la Pregunta" aria-describedby="question-addon">' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-9">' +
        '<div style="border:5px dashed #343a40; height: 300px">' +
          '<div>' +
            '<span class="input-group-text poll__input-group poll__input-group-title bg-transparent mx-auto d-block mt-3" id="question-addon">' +
            '<i class="fas fa-images mr-3"></i>Añadir Imagen' +
          '</div>' +
          '<div class="custom-file d-block mx-auto col-10">' +
            '<input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">' +
            '<label class="custom-file-label" for="inputGroupFile03">Elegir Archivo</label>' +
          '</div>' +
          '</span>' +
        '</div>'+
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-success rounded-lg">' +
            '<div class="custom-control custom-radio">' +
              '<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">' +
              '<label class="custom-control-label" for="customRadio1">Verdadero</label>' +
            '</div>' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-danger rounded-lg">' +
            '<div class="custom-control custom-radio">' +
              '<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">' +
              '<label class="custom-control-label" for="customRadio2">Falso</label>' +
            '</div>' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-12">' +
        '<input type="submit" class="btn btn-block btn-dark rounded-lg font-weight-bold" value="AÑADIR PREGUNTA">' +
      '</div>' +
    '</div>' +
  '</form>';
}

function generateMultiChoiceQuestion(){
  var main = document.getElementById('question__main');
  main.innerHTML =
  '<form method="post"> ' +
    '<div class="row">' +
      '<div class="form-group col-12">' +
        '<div class="input-group mb-3 poll__group-title">' +
          '<div class="input-group-prepend">' +
            '<span class="input-group-text poll__input-group poll__input-group-title" id="question-addon">' +
              '<i class="fas fa-question"></i>' +
            '</span>' +
          '</div>' +
          '<input type="text" name="question" class="form-control poll__input-form-control poll__input-form-control-title" placeholder="Título de la Pregunta" aria-label="Título de la Pregunta" aria-describedby="question-addon">' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-9">' +
        '<div style="border:5px dashed #343a40; height: 300px">' +
          '<div>' +
            '<span class="input-group-text poll__input-group poll__input-group-title bg-transparent mx-auto d-block mt-3" id="question-addon">' +
            '<i class="fas fa-images mr-3"></i>Añadir Imagen' +
          '</div>' +
          '<div class="custom-file d-block mx-auto col-10">' +
            '<input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">' +
            '<label class="custom-file-label" for="inputGroupFile03">Elegir Archivo</label>' +
          '</div>' +
          '</span>' +
        '</div>'+
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-success rounded-lg">' +
            '<input type="text" name="question_one" class="form-control bg-transparent border-0 text-white poll__answer-editable" placeholder="Respuesta 1...">' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-danger rounded-lg">' +
            '<input type="text" name="question_one" class="form-control bg-transparent border-0 text-white poll__answer-editable" placeholder="Respuesta 2...">' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-primary rounded-lg">' +
            '<input type="text" name="question_one" class="form-control bg-transparent border-0 text-white poll__answer-editable" placeholder="Respuesta 3...">' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-6">' +
        '<div class="card rounded-lg poll__card_answer">' +
          '<div class="card-body bg-warning rounded-lg">' +
            '<input type="text" name="question_one" class="form-control bg-transparent border-0 text-white poll__answer-editable" placeholder="Respuesta 4...">' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="form-group col-12">' +
        '<input type="submit" class="btn btn-block btn-dark rounded-lg font-weight-bold" value="AÑADIR PREGUNTA">' +
      '</div>' +
    '</div>' +
  '</form>';
}
