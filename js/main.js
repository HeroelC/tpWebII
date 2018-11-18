'use strict'
let templateComentarios;
document.querySelector("#comment").addEventListener("click", loadComments);

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
    fetch("api/comentarios")
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
