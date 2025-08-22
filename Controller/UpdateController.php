<?php 
include_once "Conexion.php";
$conexion = new Conexion();
$conexion = $conexion->conectar();


if($conexion){
  
    $id = $_POST['id'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$tel = $_POST['telefono']; 

$SQL = "UPDATE `registropersonas` SET 
                                     `Id`=:id,
                                    `Nombre`=:nombre,
                                    `Apellido`=:apellido,
                                    `Edad`=:edad,
                                    `Correo`=:correo,
                                    `Telefono`=:tel 
                                    WHERE Id=:id ";

                                     $stmt = $conexion->prepare($SQL);
                                     $stmt->bindParam(':id', $id);
                                     $stmt->bindParam(':nombre', $nombre);
                                     $stmt->bindParam(':apellido', $apellido);
                                     $stmt->bindParam(':edad', $edad);
                                     $stmt->bindParam(':correo', $correo);
                                     $stmt->bindParam(':tel', $tel);
                                     $stmt->execute();
                             
                                     header("Location: ../Index.php?mensaje=Correcto");
                                   

                                            // Otro tipo de error
                             }
                                else {
                                    header("Location: ../Index.php?mensaje=SinConexion");
                                   
                                }  


/*  $stmt->bindParam(':id', $id);
                                     $stmt->bindParam(':nombre', $nombre);
                                     $stmt->bindParam(':apellido', $apellido);
                                     $stmt->bindParam(':edad', $edad);
                                     $stmt->bindParam(':correo', $correo);
                                     $stmt->bindParam(':telefono', $tel);*/
?>

