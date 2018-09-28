<?php

class EstadiosView
{

  function __construct()
  {

  }

  function Mostrar($Estadios){

    echo '<h1>Estadios</h1>';
    echo '<table><tr>';

    echo '<td>ID</td><td>Nombre</td><td>Capacidad</td>';

    foreach ($Estadios as $estadio) {

      echo '<tr>';
      echo '<td>'.$estadio['id_estadio'].'</td><td>'.$estadio['nombre'].'</td><td>'.$estadio['capacidad'].'</td>';
      echo '</tr>';
    }
    echo '</tr></table>';
  }

}



 ?>
