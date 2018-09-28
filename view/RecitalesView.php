<?php


class RecitalesView
{

  function __construct()
  {


  }

  function Mostrar($Recitales){

    echo '<h1>Recitales</h1>';

    echo '<table><tr>';

    echo '<td>ID</td><td>Nombre</td><td>Precio</td><td>ID_Estadio</td>';

    foreach($Recitales as $recital){
      echo '<tr>';
      echo '<td>'.$recital['id_recital'].'</td> <td>'.$recital['nombre'].'</td> <td>'.$recital['precio'].'</td> <td>'.$recital['estadio_id'].'</td>';
      echo '</tr>';


    }

    echo '<img src="img/album1.jpg">';

    echo '<form action="agregarRecital" method="post">
    <input type="text" name="nombre" value="">
    <input type="number" name="precio" value="">
    <input type="number" name="id_estadio" value="">
    <button type="submit" name="button">Enviar</button>
    </form>';
  }

}


 ?>
