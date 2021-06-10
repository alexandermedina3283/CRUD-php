<?php error_reporting (0);?>
<form class="row g-3" action="../controladores/usuarioCrearControlador.php" method="post">

<div class="col-12">
    <label class="form-label">Codigo</label>
    <input type="text" class="form-control" name="codigo" placeholder="Ingrese codigo" value="<?php echo $codigo ?>" required>
  </div>

  <?php

  if(isset($ErrorCodigo))

    echo "<div class='alert alert-danger' role='alert'> $ErrorCodigo </div>"


?>

  <div class="col-12">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre y apellidos" value="<?php echo $nombre ?>" required>
  </div>

  <div class="col-12">
    <label class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo" placeholder="usuario@dominio" value="<?php echo $correo ?>" required>
  </div>

  <div class="col-12">
    <label class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" placeholder="Ingrese contraseña" value="<?php echo $contrasena ?>"required>
  </div>
    
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>