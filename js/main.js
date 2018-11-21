'use strict';

let urlAPI = "api/comentarios";
let templateComentarios;
let timer;

document.addEventListener('DOMContentLoaded', loadComments);

function loadComments(){

  //DESCARGAR Y COMPILAR EL TEMPLATE (SE DESCARGA UNA VEZ AL PRINCIPIO)
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentarios = Handlebars.compile(template); // compila y prepara el template

      getComentarios();

      // getComentarios();
      document.querySelector("#comment").addEventListener('click', agregarComentario);
  });
}
function getComentarios() {

  let id_recital = document.querySelector("#id_recital").value;
    console.log(id_recital);
    fetch(urlAPI + '/' + id_recital)
    .then(r => r.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
  }
function mostrarComentarios(jsonComentarios) {
  // let admin = 0;
  // admin = document.querySelector(".admin").getAttribute("data");
  //   console.log(admin);
  //   if (admin === "admin") {
  //     admin = 1;
  //     console.log(admin);
  //   }
  //   else {
  //     admin = 0;
  //     console.log(admin);
  //   }
  //INSTANCIAR TEMPLATE CON UN CONTEXTO
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
        // administrador: admin
    }
    let html = templateComentarios(context);
    document.querySelector(".comentarios").innerHTML = html;

    let b = document.querySelectorAll(".borrar");

    b.forEach(b=> {b.addEventListener("click",function(){borrarComentario(b.getAttribute("data"))});
   });
}

function agregarComentario(){
  //Aca deberiamos agarrar los input de mensaje puntaje id recital y id usuario
  //para pasarlos al objeto
  let mensaje = document.querySelector("#texto").value;
  let puntaje = document.querySelector("#puntaje").value;
  let recital = document.querySelector("#id_recital").value;
  let idUsuario = document.querySelector(".idUsuario").getAttribute("data");

  console.log(recital);
  //Creamos el objeto comentario para enviar, con los atributos de la DB
  let comentario = {
    "mensaje": mensaje,
    "puntaje": puntaje,
    "id_usuario": idUsuario,
    "id_recital": recital
  }

  //ID USUARIO Y ID RECITAL HARDCODEADO, ESTO SE TIENE QUE CAMBIAR

  fetch(urlAPI, {
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentario)
  })
  .then(r => {
    if(r.ok){
      r.json().then(t => {
        console.log("Se cargo con éxito");
        getComentarios();
        //Se deberian vaciar los puntajes y texto
        //Acá se deberia volver a llamar a la función de cargar comentarios, todavia no
      })
    }
  })
}

  function borrarComentario(id_comentario){
    console.log("borrar");
    console.log(id_comentario);
    fetch(urlAPI + '/' + id_comentario,  {
    'method': 'DELETE',
    'headers': {'Content-Type': 'application/json'},
    })
    .then(r => loadComments())
  }
