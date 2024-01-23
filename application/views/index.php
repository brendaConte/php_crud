<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title> CRUD Codeigniter 3</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>
 <?php include "includes/header.php"; ?>
  <div class="container-fluid row contenedor-principal"> 

      <div class="col-12 p-4 box-1">
           <table class="table table-hover tabla">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
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

    <div class="box2" >

      <?php echo form_open('welcome/registro' , ['id'=>'form-usuario']); ?>

          <h4 class="title">Registrar/modificar usuario</h4>

          <input type="hidden"  name="id" id="id" value="" >

          <div class="mb-3">
            <label class="form-label" for="nombre" >Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required="true" placeholder="nombre">
          </div>
          <div class="mb-3">
            <label  class="form-label" for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required="true" placeholder="example@email.com">
          </div>
          <div class="mb-3">
            <label  class="form-label" for="fecha_nac">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" required="true">
          </div>
          <div class="mb-3">
            <label class="form-label" for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="telefono" required="true" placeholder="2352 123456">
          </div>
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary " name="btnregistrar"  value="guardar"> Guardar </button>
          </div>
      <?php echo form_close(); ?>   
    </div>

  </div>

<?php include "includes/footer.php"; ?>
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