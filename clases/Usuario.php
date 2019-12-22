<?php
include("registro.php");
include("funciones_proyecto.php");
include("perfil.php");
include("mis-contactos.php");


class Usuario{
  protected $id_usuario;
  protected $nombreDeUsuario;
  protected $contraseña;
  protected $posteo;


  public function getIdUsuario(){
    return $this->id_usuario;
  }
  public function setIdUsuario($id_usuario){
     $this->id_usuario = $id_usuario;
  }

  public function getNombreDeUsario(){
    return $this->nombreDeUsuario;
  }
  public function setNombreDeUsuario($nombreDeUsuario){
     $this->nombreDeUsuario = $nombreDeUsuario;
  }

  public function getContraseña(){
    return $this->contraseña;
  }
  public function setContraseña($contraseña){
     $this->contraseña = $this->encriptarPass($contraseña);
  }

  public function getPosteo(){
    return $this->posteo;
  }
  public function setPosteo($posteo){
     $this->posteo = $posteo;
  }

  public function crearUsuario(){
    // REGISTRACION DE USUARIO
    $usuarioFinal = [
        'nombre' => trim($_POST['nombre']),
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];
    // ENVIAR A LA BASE DE DATOS $usuarioFinal
    $jsonDeUsuario = json_encode($usuarioFinal);
    file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
  }

  public function crearContraseña(){
    // (Gera)para mi innecesario esta funcion porque podemos meter todos los datos en usuario
  }

  public function crearPost(){
    // echo "el posteo se ha realizado de manera correcta";
  }

  public function agregarContacto(){
    // echo "el contacto ha sido agregado";
  }

  public function eliminarPost(){
     return document.getElementById("eliminarPost").innerHTML="";
  }

  public function eliminarContacto(){
    // echo "el contacto ha sido eliminado correctamente";
  }

  //ENCRIPTAR
  private function encriptarPass($contraseña){
    $hash = password_hash($contraseña, PASSWORD_DEFAULT);
    return $hash;
  }

}


 ?>
