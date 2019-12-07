<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=".\css\registro-style.css">
    <meta charset="utf-8">
    <title>Registrarse</title>
  </head>
  <body>
    <div class="container">
      <header>

        <nav class="navbar navbar-light bg-transparent">
        <!-- LOGO -->
          <a title="PointFlix" href="./index.php">
            <img class="logo" src="https://github.com/gallol/proyecto-integral/blob/master/proyecto-integral-master/Imagenes/logo.png?raw=true" alt="Postflix">
          </a>
      </header>
      <form>
  <div class="form-row">
    <div class="form-group col-md-6 col-xs-12">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-6 col-xs-12" >
      <label for="inputName">Nombre Completo</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre Completo">
    </div>
    <div class="form-group col-md-6" style='height:80px; color:white'>
        <label for='password' >Foto de Perfil</label><br/>
        <div class='pwdwidgetdiv' id='thepwddiv' ></div>
        <input type='file' name='file' id='file' maxlength="50" />
        <div id='register_file_errorloc' class='error' style='clear:both'></div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputAge">Edad</label>
    <input type="text" class="form-control" id="inputAge" placeholder="Edad">
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Direccion">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Provincia</label>
      <select id="inputState" class="form-control">
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
      <label for="inputZip">Codigo Postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>


  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
