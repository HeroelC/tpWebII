<?php

class TareasView
{

  function __construct()
  {


  }

  function Home($Estadios){

    echo '<h1>Estadios</h1>';
    echo '<table><tr>';

    echo '<td>id</td><td>nombre</td><td>capacidad</td>';

    foreach ($Estadios as $estadio) {

      echo '<tr>';
      echo '<td>'.$estadio['id_estadio'].'</td><td>'.$estadio['nombre'].'</td><td>'.$estadio['capacidad'].'</td>';
      echo '</tr>';
    }
    echo '</tr></table>';
  }


  function mostrarRecitales($Recitales){

    echo '<h1>Recitales</h1>';

    echo '<table><tr>';

    echo '<td>id</td><td>nombre</td><td>precio</td><td>id_estadio</td>';

    foreach($Recitales as $recital){
      echo '<tr>';
      echo '<td>'.$recital['id_recital'].'</td> <td>'.$recital['nombre'].'</td> <td>'.$recital['precio'].'</td> <td>'.$recital['estadio_id'].'</td>';
      echo '</tr>';
    }
  }
}




 ?>
