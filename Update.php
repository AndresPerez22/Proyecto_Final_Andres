<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id'];



if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id'];

include_once "controller/conexion.php";
$con = new Conexion();
$con = $con->conectar();

if(!$con) {
    header("location: index.php? error="."sin conexion");
    exit();
}

$sql = "SELECT * FROM `registropersonas` WHERE Id = :id ";
$con=$con->prepare($sql);
$con -> bindparam(':id', $id);
$con->execute();

//verificar valores vacios
if($con->Rowcount() ==0 ){
    header("location: index.php? error="."no existe el dato que buscas");
}
$registro=$con->fetch(PDO::FETCH_ASSOC);

echo $registro['Nombre'];




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'Layout/Layout.php'; ?>
    <div class="container mt-5">
        <!-- Aquí va el contenido de tu página, por ejemplo el formulario de actualización -->
        <h2>Actualizar Registro</h2>
        </div>
  
  <div class="container mb-5">
    <h1 class="text-primary">Regístrate</h1>

    <form action ="Controller/registro.php" Method="POST">
      <div class="row">
        <div class="col">
           <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Nombre']);?>" name ="nombre">
      </div>
      <div class="col">
           <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Id']);?>" disabled name ="id">
      </div>
</div>
<div class="row">
<div class="col">
           <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Apellido']);?>" name ="apellido">
      </div>

       <div class="col">
           <input type="email" class="form-control" value="<?php echo htmlspecialchars($registro['Correo']);?>" name ="correo">
       </div>
</div>
<div class="row">
      <div class="col">
           <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Edad']);?>" name ="edad">
      </div>
      <div class="col">
      <div class="col">
           <input type="text" class="form-control"value="<?php echo htmlspecialchars($registro['Telefono']);?>" name ="telefono">
      </div>

      </div>
      </div>
      <button type="Submit">Registrarse</button>
    </form>

    <br> 
    <br>

  
  </div>
        <!-- ... -->
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>