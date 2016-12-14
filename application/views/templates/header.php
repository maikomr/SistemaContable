<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema contable</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
    </head>
<body>
    <nav class="navbar navbar-fixed-top dark-color-background">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-menu" href="#">Softline</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a class="nav-menu" href="http://sistema-contable">Inicio</a></li>
            <?php if ($this->session->userdata('isLoggedIn')) { ?>
              <li><a class="nav-menu" href="http://sistema-contable/index.php/libro-diario">Libro Diario</a></li>
              <li><a class="nav-menu" href="http://sistema-contable/index.php/libro-mayor">Libro Mayor</a></li>
              <li><a class="nav-menu" href="http://sistema-contable/index.php/balance-sumas-saldos">Balance de 
              Sumas y Saldos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a class="nav-menu" href="#"><?php echo $this->session->userdata('username'); ?></a></li>
              <li>
                <a class="nav-menu" href="http://sistema-contable/index.php/logout_user">Salir</a>
              </li>
            </ul>
            <?php } else { ?>
            </ul>
            <form class="navbar-form navbar-right" action="http://sistema-contable/index.php/login_user" method="post" accept-charset="utf-8">
              <div class="form-group">
                <input type="text" name="username" placeholder="Usuario" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" class="form-control">
              </div>
              <button type="submit" name="submit" class="btn btn-success">Ingresar</button>
              
              <?php if (isset($error) && $error): ?>
                <div class="alert alert-error">
                  <a class="close" data-dismiss="alert" href="#">×</a>Usuario o contraseña inválidos!
                </div>
              <?php endif; ?>
            </form>            
            <?php } ?>
        </div>
      </div>
    </nav>
