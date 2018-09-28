<head>
  <base href="http://localhost/tpwebii/">
</head>

<?php

class TareasView
{

  function __construct()
  {


  }

  function Home($Estadios){

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

  function mostrarRecitales($Recitales){

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
