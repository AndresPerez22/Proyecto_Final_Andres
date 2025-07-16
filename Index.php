<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Pagina</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f2f2f2;">

  
  <h1 class="text-center mt-3" style="color: blue;">Bienvenidos a mi pagina</h1>

 
  <div class="container text-center mt-4 mb-4">
    <a href="#" class="btn btn-primary m-1">Inicio</a>
    <a href="#" class="btn btn-warning m-1">Contactanos</a>
    <a href="#" class="btn btn-success m-1">Quienes Somos</a>
  </div>
 
  <div class="container mb-4">
    <h2>Tenemos los mejores programadores para ti </h2>
    <p>tercerizamos tus procesos</p>
  </div>

 
  <div class="container mb-5">
    <h3>Trabajamos por ti</h3>
    <div id="miCarrusel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="Imagen.jpg" class="d-block w-100" alt="Imagen 1">
        </div>
          <div class="carousel-item active">
          <img src="Imagen.jpg" class="d-block w-100" alt="Imagen 1">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#miCarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>



  

         

  </div>


  <div class="container mb-5">
    <div class="row">
      <div class="col-8">
        <h4>Contenido</h4>
        <p>Conoce nuestros planes.</p>
      </div>
      <div class="col-4" style="background-color: #e6e6e6;">
        <h2>resolvemos</h2>
        <p>tus necesidades son nuestra prioridad.</p>
      </div>
    </div>

    

  <table class="table">

    <thead>
      <tr>
        <th scope="col">Sedes</th>
        <th scope="col">Contacto</th>
        
      
      </tr>
      <tr>
        <th scope="col">Londres</th>
        <th scope="col">2038464655</th>
      </tr>
    </thead>

     </table>
  </div>
  
  <div class="container mb-5">
    <h1 class="text-primary">Regístrate</h1>

    <form action ="Controller/registro.php" Method="POST">
      <div class="row">
        <div class="col">
           <input type="text" class="form-control" placeholder="ingrese tu Nombre" name ="nombre">
      </div>
      <div class="col">
           <input type="text" class="form-control" placeholder="ingrese tu Documento" name ="documento">
      </div>
</div>
<div class="row">
<div class="col">
           <input type="text" class="form-control" placeholder="ingresa tu Apellido" name ="apellido">
      </div>

       <div class="col">
           <input type="email" class="form-control" placeholder="ingrese tu Correo" name ="correo">
       </div>
</div>
<div class="row">
      <div class="col">
           <input type="text" class="form-control" placeholder="ingrese tu Edad" name ="edad">
      </div>
      <div class="col">
      <div class="col">
           <input type="text" class="form-control" placeholder="ingrese tu Telefono"name ="telefono">
      </div>

      </div>
      </div>
      <button type="Submit">Registrarse</button>
    </form>

  </div>

<!-- Modal genérico -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeModalLabel">Resultado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="mensajeTexto">
        <!-- Aquí va el mensaje dinámico -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/Modal.js"></script>
</body>

</html>
