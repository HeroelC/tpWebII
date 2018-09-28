<?php

class TareasView
{

  function __construct()
  {


  }

  function Home($Estadios){

    echo 'Página principal';

    foreach ($Estadios as $estadio) {

      echo '<li>';
      echo $estadio['nombre'].' '.$estadio['capacidad'];
      echo '</li>';
    }
    
  }


  function mostrarRecitales($Recitales){

    echo 'Recitales';

    foreach($Recitales as $recital){
      echo '<li>';
      echo $recital['nombre'].' '.$recital['precio'];
      echo '</li>';
    }
  }
}




 ?>
