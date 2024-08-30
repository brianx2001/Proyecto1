<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">

    <link rel="stylesheet" href="cdn.datatables.net/2.1.4/js/dataTables.min.js">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title>CRUD DATA TALES</title>
  </head>
  <body>
    
  <div class="container">
  <h1 class="text-center">CRUD con PHP, PDO, Ajaz y Datatabkles</h1>
  <h1 class="text-center">github-com/brianx100</h1>

  <div class="row">
    <div class="col-2 offset-10">
      <div class="text-center">
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn btn-primary w-100"
          data-bs-toggle="modal"
          data-bs-target="#modalUsuario"
          id="botonCrear"
        >
          <i class="bi bi-plus-circle-fill"></i>Crear
        </button>
      </div>
    </div>
    </div>

    <br />
    <br />

    <div class="table-responsive">
    <table id="datos_usuario" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th>Email</th>
          <th>Imagen</th>
          <th>Fecha creacion</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<!-- Modal -->
<!--*****id de la siguiente linea se toma de data-bs-target="#modalUsuario"*****-->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <!--***** CAMBIA EL TITULO DEL FORMULARIO *****-->
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      

 <!--***** FALTA ORGANIZAR LA ETIQUETA DE CIERRE DE FORMS *****-->

      
      <form action="POST" id="formulario" enctype="multipart/form-data">
  <div class="modal-content">
     <!--***** modal body ESTA ENCIMA DE FORM PERO SE INGRESA DENTRO DE modal-content *****-->
  <div class="modal-body">
    <!--***** SE ESCRIBE 3 VECES EL NOMBRE EN EL INPUT *****-->
    <label for="nombre">Ingrese el nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" />
    <br />

    <label for="apellidos">Ingrese los apellidos</label>
    <input type="text" name="apellidos" id="apellidos" class="form-control" />
    <br />

    <label for="telefono">Ingrese el telefono</label>
    <input type="text" name="telefono" id="telefono" class="form-control" />
    <br />

    <label for="email">Ingrese el email</label>
    <input type="email" name="email" id="email" class="form-control" />
    <br />

    <label for="imagen"></label>
    <input
      type="file"
      name="imagen_usuario"
      id="imagen_usuario"
      class="form-control"
    />
    <!--***** MENSAJE DE ALERTA *****-->
    <span id="imagen-subida"></span>
    <br />
</div>

      </div>
       <!--***** MODIFICA EL BOTON DE ENVIO *****-->
      <div class="modal-footer">
      <input type="hidden" name="id_usuario" id="id_usuario" />
       <!--***** IDENTIFICA LA OPERACION DEL USUARIO *****-->
      <input type="hidden" name="operacion" id="operacion" />
      <input
        type="submit"
        name="action"
        id="action"
        class="btn btn-success"
        value="Crear"
      />
    </div>
    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>