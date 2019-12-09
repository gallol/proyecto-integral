<?php
session_start();
require_once 'funciones_proyecto.php';
$arrayDeErrores = "";
if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // REGISTRACION DE USUARIO
        $usuarioFinal = [
            'nombre' => trim($_POST['nombre']),
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        // ENVIAR A LA BASE DE DATOS $usuarioFinal
        $jsonDeUsuario = json_encode($usuarioFinal);
        file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/registro-style.css" rel="stylesheet">
      <meta charset="utf-8">
    <title>Registrarse</title>
  </head>
  <body>
    <div class="container">
      <!-- BARRA DE NAVEGACION -->
      <form class="form-inline"   "col-lg-4 col-xs-12">
        <a title="Boton Home" href="index.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Home </button>
        </a>

        <a title="Boton Login" href="./login.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Login </button>
        </a>
        <!-- <a title="Boton Registro" href="./registro.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Registro </button>
        </a> -->
        <a title="Boton Mis Posts" href="./vistapost.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> MisPosts </button>
        </a>
        <a title="Boton Ayuda" href="./faqs.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Ayuda </button>
        </a>
        <a title="Boton Contacto" href="./contacto.php">
          <button class="btn btn-outline-success" style="margin:10px" id="boton" type="button"> Contacto </button>
        </a>
        </form>
      <header>

        <nav class="navbar navbar-light bg-transparent">
        <!-- LOGO -->
          <a title="PointFlix" href="./index.php">
            <img class="logo" src=".\Imagenes\logo.png" alt="Postflix">
          </a>
      </header>
      <form method="post" action="">
  <div class="form-row">

    <div class="form-group col-md-6 col-xs-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email"  name="email" value="<?= persistirDato($arrayDeErrores, 'email'); ?>">
       <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
    </div>

    <div class="form-group col-md-6">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder=" Contraseña" name="password">
      <small class="text-danger"><?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?></small>
    </div>

    <div class="form-group col-md-6 col-xs-12" >
      <label for="nombre">Nombre Completo</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo"  name="nombre" value="<?= persistirDato($arrayDeErrores, 'nombre'); ?>">
      <small class="text-danger"><?= isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ?></small>
    </div>

    <div class="form-group col-md-6">
      <label for="repassword">Repetir Contraseña</label>
      <input type="password" class="form-control" id="repassword" placeholder="Repetir Contraseña"  name="repassword">
      <small class="text-danger"><?= isset($arrayDeErrores['repassword']) ? $arrayDeErrores['repassword'] : "" ?></small>
    </div>

    <div class="form-group col-md-6" style='height:80px; color:white'>
        <label for='password' >Foto de Perfil</label><br/>
        <div class='pwdwidgetdiv' id='thepwddiv' ></div>
        <input type='file' name='file' id='file' maxlength="50" />
        <div id='register_file_errorloc' class='error' style='clear:both'></div>
    </div>
  </div>

  <!-- <div class="form-group">
    <label for="edad">Edad</label>
    <input type="text" class="form-control" id="edad" placeholder="Edad" name="edad">
  </div>
  <div class="form-group">
    <label for="address">Direccion</label>
    <input type="text" class="form-control" id="addres" placeholder="Direccion"  name="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">Ciudad</label>
      <input type="text" class="form-control" id="city"  name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="state">Provincia</label>
      <select id="state" class="form-control" name="state">
        <option selected>Elegir...</option>
          <option> <li>Tucuman</li></option>
          <option><li>Prov. Buenos Aires</li></option>
          <option><li>Ciudad Autonoma de Bs.As.</li></option>
          <option><li> Cordoba </li></option>
          <option><li>Santa Cruz</li></option>
          <option> <li> Salta </li> </option>
          <option><li> Misiones </li></option>
          <option><li>Chaco</li></option>
          <option> <li> Corrientes </li> </option>
          <option><li> Santiago del Estero </li></option>
          <option><li>Jujuy</li></option>
          <option> <li> Formosa </li> </option>
          <option><li> Catamarca </li></option>
          <option><li>La Rioja</li></option>
          <option> <li> San Juan </li> </option>
          <option><li> Mendoza </li></option>
          <option><li>San Luis</li></option>
          <option> <li> Santa Fe </li> </option>
          <option><li> Entre Rios </li></option>
          <option><li>Rio Negro</li></option>
          <option> <li> Neuquen </li> </option>
          <option><li> Chubut </li></option>
          <option><li>La Pampa</li></option>
          <option> <li> Tierra del Fuego </li> </option>
       </option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="zip">Codigo Postal</label>
      <input type="text" class="form-control" id="zip" name="zip">
    </div>
  </div> -->


  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
