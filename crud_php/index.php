<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Registro De Proveedores</h1>
    <div class="container-fluid row">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id_Proveedor</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Proveedor</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefono</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
 <div class=col-8 p-4></div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">id_Proveedor</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql = $conexion->query("select * from proveedores ");
    while($datos = $sql->fetch_object()) { ?>
        <tr>
      <td><?= $datos->id_provee?></td>
      <td><?= $datos->proveedor?></td>
      <td><?= $datos->telefono?></td>
      <td><?= $datos->email?></td>
      <td><?= $datos->direccion?></td>
    <td>
        <a href="">Editar</a>
        <a href="">Eliminar</a>
    </td>
    </tr>
    <?php }
    ?>

  </tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>