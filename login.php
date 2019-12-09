<?php
$email = "";
$password = "";
session_start();
require_once 'funciones_proyecto.php';
$arrayDeErrores = "";
if($_POST) {
    $arrayDeErrores = validarLogin($_POST);
    if(count($arrayDeErrores) === 0) {
        // REGISTRACION DE USUARIO
        $usuarioFinal = [
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        // ENVIAR A LA BASE DE DATOS $usuarioFinal
        $jsonDeUsuario = json_encode($usuarioFinal);
        file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
        header("Location: vistapost.php");
        exit;
    }
}

 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Postflix</title>
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
    <div class="navbar">
      <!-- BARRA DE NAVEGACION -->
      <form class="form-inline"   "col-lg-4 col-xs-12">
        <a title="Boton Home" href="index.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Home </button>
        </a>

        <a title="Boton Login" href="./login.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Login </button>
        </a>
        <a title="Boton Registro" href="./registro.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Registro </button>
        </a>
        <a title="Boton Mis Posts" href="./vistapost.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Mis Posts </button>
        </a>
        <a title="Boton Ayuda" href="./faqs.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Ayuda </button>
        </a>
        <a title="Boton Contacto" href="./contacto.php">
          <button class="btn btn-outline colornav" style="margin:10px" id="boton" type="button"> Contacto </button>
        </a>
        </form>
    </div>
    <div class="signin1">
      <form class="form-signin" method="post" action="">
        <a href="./index.php"><img class="mb-4" src="./Imagenes/logo.png" alt="" width="170" height="72"></a>
    <h1 class="h3 mb-3 font-weight-normal">Completa con tus datos de usuario para ingresar</h1>
    <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" name="email" value="<?= persistirDato($arrayDeErrores, 'email'); ?>" required="" autofocus="">
      <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
    <br>
    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" value="<?=$password?>" required="">
      <small class="text-danger"><?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?></small>
    <div class="checkbox mb-3">
      <label>
        <input id="minion" type="checkbox" value="remember-me"> <a id="wity">Recuerdame</a>
    </div>
      <button id="botonn" class="btn btn-lg btn-primary btn-block" type="submit"><a id="signin" href="./vistapost.php">¡Ingresa!</a></button>
        <p class="mini mt-5 mb-3 text-muted">©2019</p>
        <a class="footer" href="./registro.php">¿Todavia no te registraste?</a>
        <a class="footer" href="./contacto.php">¿Necesitas ayuda para recuperar tu contraseña?</a>
      </form>
    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
