<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
  <title>The Rolling Stones</title>
  <link href="img/favicon.png" rel="icon" type="image/x-icon" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Carousel -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/master.css" rel="stylesheet">

</head>

<body>

{if (isset($smarty.session.User))}
  {if $smarty.session.admin == 1}
    {include file="navAdmin.tpl"}
  {else}
    {include file='navUsuario.tpl'}
  {/if}
{else}
  {include file="nav.tpl"}
{/if}
