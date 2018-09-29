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
      echo '<td>'.$estadio['id_estadio'].'</td><td>'.$estadio['nombre'].'</td><td>'.$estadio['capacidad'].'
      <a href=eliminarEstadio/'.$estadio['id_estadio'].'>Borrar</a></td>';
      echo '</tr>';
    }
    echo '</tr></table>';

    echo '<form action="agregarEstadio" method="post">
    <input type="text" name="nombre" value="">
    <input type="number" name="capacidad" value="">
    <button type="submit" name="button">Enviar</button>
    </form>';
  }

}



 ?>
