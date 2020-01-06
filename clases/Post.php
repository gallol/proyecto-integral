<?php
class Post{
protected $id_post;
protected $calificaciones;
protected $opiniones;


 public function getIdPost(){
   return $this->$id_post;
 }
 public function setIdPost($id_post){
   $this->$id_post = $id_post;
 }

 public function getCalificaciones(){
    return $this->$calificaciones;
 }
 public function setCalificaciones($calificaciones){
   $this->$calificaciones = $calificaciones;
 }

 public function getOpiniones(){
    return $this->$opiniones;
}
public function setOpiniones($opiniones){
   $this->$opiniones = $opiniones;
}

 public function SubirImagen(){
   // echo "la imagen fue subida correctamente";
 }

 public function darOpinion(){
   // echo "la opinion fue reicbida y sera entregada";
 }

 public function calificar(){
   // echo "el posteo ha sido calificado correctamente";
 }

}

 ?>
