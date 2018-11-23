'use strict';

let urlAPI = "api/comentarios";
let templateComentarios;


document.addEventListener('DOMContentLoaded', loadComments);

//Funcion para cargar los comentarios cuando carga la página
function loadComments(){

  //DESCARGAR Y COMPILAR EL TEMPLATE (SE DESCARGA UNA VEZ AL PRINCIPIO)
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentarios = Handlebars.compile(template); // compila y prepara el template
      getComentarios();
      let enviarComentario = document.querySelector("#comment");

      //Añade funcionalidad al boton comentar
      if(enviarComentario){
        enviarComentario.addEventListener('click', agregarComentario);
      }
      let timer = setInterval(getComentarios, 2000);
  });
}

//Traer comentarios
function getComentarios() {

  let id_recital = document.querySelector("#id_recital");
  if(id_recital){
    id_recital = id_recital.value;
  }
    console.log(id_recital);
    fetch(urlAPI + '/' + id_recital)
    .then(r => r.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
  }

function mostrarComentarios(jsonComentarios) {

  //INSTANCIAR TEMPLATE CON UN CONTEXTO
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
    }

    let html = templateComentarios(context);
    let mostrarComentarios = document.querySelector(".comentarios");

    if(html!=null){
      mostrarComentarios.innerHTML = html;
    }

    let b = document.querySelectorAll(".borrar");
    let administador = document.querySelector(".admin").getAttribute("data");
    if (administador === "admin") {
      b.forEach(b=> {b.addEventListener("click",function(){borrarComentario(b.getAttribute("data"))});
      b.removeAttribute("hidden");

    });
  }
}

function agregarComentario(){

  //Valores para crear el objeto
  let mensaje = document.querySelector("#texto").value;
  let puntaje = document.querySelector("#puntaje").value;
  let recital = document.querySelector("#id_recital").value;
  let idUsuario = document.querySelector(".idUsuario").getAttribute("data");

  //Creamos el objeto comentario para enviar, con los atributos de la DB
  let comentario = {
    "mensaje": mensaje,
    "puntaje": puntaje,
    "id_usuario": idUsuario,
    "id_recital": recital
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
        getComentarios();
      })
    }
  })

  //Limpiamos la caja de texto después de enviar el comentario
  let msj = document.querySelector("#texto");
  msj.value = '';
  msj.innerHTML = '';
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
