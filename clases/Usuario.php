<?php
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
     $this->contraseña = $contraseña;
  }

  public function getPosteo(){
    return $this->posteo;
  }
  public function setPosteo($posteo){
     $this->posteo = $posteo;
  }

  public function crearUsuario(){
    // echo "el usuario ha sido creado";
  }

  public function crearContraseña(){
    // echo "la contraseña fue creada";
  }

  public function crearPost(){
    // echo "el posteo se ha realizado de manera correcta";
  }

  public function agregarContacto(){
    // echo "el contacto ha sido agregado";
  }

  public function eliminarPost(){
    // echo "el posteo ha sido eliminado correctamente";
  }

  public function eliminarContacto(){
    // echo "el contacto ha sido eliminado correctamente";
  }

}


 ?>
