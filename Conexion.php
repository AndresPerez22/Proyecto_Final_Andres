<?php
class conexion {
  public function  _construct() {}
  public function _destruct () {}

  public function conectar () {
  include_once "configuracion.php";
  $con=null;
  try {
    $con=new PDO("mysql:localhost=".HOST.":81;dbname=".DB.";charset=utf8",USUARIO,CLAVE);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   } 
   catch (PDOExeception $ex){
    echo "Base de datos incorrecta" . $ex ->get_message();


  }
   return $con;

   } 

 }
  

?>
