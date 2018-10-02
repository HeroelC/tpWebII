<?php

include_once "./libs/smarty.class.php";

class NavegacionView
{

  function __construct()
  {

  }

  function Home(){

    $smarty = new Smarty();

    $smarty->display('templates/home.tpl');
  }

  function Band(){

    $smarty = new Smarty();

    $smarty->display('templates/band.tpl');
  }

  function Music(){

    $smarty = new Smarty();

    $smarty->display('templates/music.tpl');
  }




}


 ?>
