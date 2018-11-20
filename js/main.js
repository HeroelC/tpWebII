'use strict';

let urlAPI = "api/comentarios";
let templateComentarios;

document.addEventListener('DOMContentLoaded', loadComments);

function loadComments(){
  //DESCARGAR Y COMPILAR EL TEMPLATE (SE DESCARGA UNA VEZ AL PRINCIPIO)
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentarios = Handlebars.compile(template); // compila y prepara el template

      getComentarios();
  });
}
function getComentarios() {
    fetch(urlAPI)
    .then(response => response.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
  //INSTANCIAR TEMPLATE CON UN CONTEXTO
    let context = { // como el assign de smarty
        comentarios: jsonComentarios
    }
    let html = templateComentarios(context);
    document.querySelector(".comentarios").innerHTML = html;
}

function agregarComentario(){
  //Aca deberiamos agarrar los input de mensaje puntaje id recital y id usuario
  //para pasarlos al objeto
  let mensaje = document.querySelector("#texto").value;
  let puntaje = document.querySelector("#puntaje").value;

  //Creamos el objeto comentario para enviar, con los atributos de la DB
  let comentario = {
    "mensaje": mensaje,
    "puntaje": puntaje,
    "id_usuario": 1,
    "id_recital": 6
  }

  fetch(urlAPI, {
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentario)
  })
  .then(r => {
    if(r.ok){
      r.json().then(t => {
        console.log("Se cargo con éxito");
        //Acá se deberia volver a llamar a la función de cargar comentarios, todavia no
      })
    }else{

    }
  })

}

document.querySelector("#comment").addEventListener('click', agregarComentario);
