<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title> CRUD Codeigniter3</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php include "includes/header.php"; ?>

<div class="container-fluid row">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
      Nuevo usuario
    </button>
    <form class="dropdown-menu p-4">
       <?php echo form_open('welcome/registro' , ['id'=>'form-usuario']); ?>
        <input type="hidden"  name="id" id="id" value="">
      <div class="mb-3">
        <label for="exampleDropdownFormEmail2" class="form-label"> Nombre </label>
        <input type="text" class="form-control" id="nombre" placeholder="email@example.com" required="true">
      </div>
      <div class="mb-3">
        <label for="exampleDropdownFormPassword2" class="form-label"> E-mail </label>
        <input type="email" class="form-control" id="email" placeholder="E-mail" required="true">
      </div>
      <div class="mb-3">
        <label for="exampleDropdownFormPassword2" class="form-label"> Fecha de nacimiento </label>
        <input type="date" class="form-control" id="fecha" placeholder="Fecha" required="true">
      </div>
        <div class="mb-3">
        <label for="exampleDropdownFormPassword2" class="form-label"> Telefono </label>
        <input type="password" class="form-control" id="telefono" placeholder="Telefono" required="true">
      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar"  value="guardar"> Registrarse </button>
    </form>
       <?php echo form_close(); ?>
  </div>
</div>




  <div class="container-fluid row">
   
    <?php echo form_open('welcome/registro' , ['id'=>'form-usuario']); ?>

    <h3>Usuarios</h3>
    <input type="hidden"  name="id" id="id" value="">

    <div class="mb-3">
      <label class="form-label" >Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" required="true">
    </div>
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" required="true">
    </div>
    <div class="mb-3">
      <label  class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" required="true">
    </div>
    <div class="mb-3">
      <label class="form-label">Telefono</label>
      <input type="number" class="form-control" name="telefono" id="telefono" required="true">
    </div>
    <button type="submit" class="btn btn-primary" name="btnregistrar"  value="guardar"> Guardar </button>

    <?php echo form_close(); ?>

    <div class="col-12 p-4">
     <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Telefono</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($usuarios as $usuario) { ?>
          <tr>
            <td><?php echo $usuario->id; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $usuario->fecha_nac; ?></td>
            <td><?php echo $usuario->telefono; ?></td>
            <td> 
              <a href="javascript:void(0)" class="btn btn-small btn-warning" type="button" onclick="llenar_campos('<?php echo $usuario->id ?>','<?php echo $usuario->nombre ?>','<?php echo $usuario->email ?>','<?php echo $usuario->fecha_nac ?>','<?php  echo $usuario->telefono; ?>' )"> Editar </a>
            </td>
            <td><a href="<?php echo base_url('welcome/eliminar/'.$usuario->id) ?>" class="btn btn-small btn-danger"> Eliminar </a></td>
            <td><a href="<?php echo base_url('Welcome/ver_listado/'.$usuario->id) ?>" class="btn btn-small btn-success"> Ver entradas </a></td>

          </tr> 
        <?php } ?>

      </tbody>
    </table>

  </div>     

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
 
  let url = "<?php  echo base_url('welcome/editar'); ?>" ;


  const llenar_campos = (id, nombre, email, fecha_nac , telefono) => {
    let path= url + "/" + id ;

    document.getElementById('form-usuario').setAttribute('action', path)
    document.getElementById('id').value= id;
    document.getElementById('nombre').value= nombre;
    document.getElementById('email').value= email;
    document.getElementById('fecha_nac').value= fecha_nac;
    document.getElementById('telefono').value= telefono;
  };

</script>
</body>


</html>