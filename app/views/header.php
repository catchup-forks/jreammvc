<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="css/style.css" rel="stylesheet"> -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
  <?php
  if (isset($this->js)) {
    foreach ($this->js as $js) {
      echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
    }
  }
  ?>


</head>

<body>

<?php Session::init(); ?>


<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php if (Session::get('loggedIn') == true): ?>
        <ul class="nav navbar-nav">

          <li class="active"><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
          <li><a href="<?php echo URL; ?>note">Notes</a></li>
          <li><a href="<?php echo URL; ?>user">Users</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      <?php else: ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo URL; ?>login">Login</a></li>
        </ul>
      <?php endif; ?>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>

<div><BR /></div>


<div class="container">



