<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Registro de usuario</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="py-2"> 

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">

            <div class="card shadow">

              <div class="card-header"  style="background-color: #216B79 ; color: white">
               <h5>Registro</h5>
              </div>

                <div class="card-body">
                  <form action="<?php echo base_url('registro') ?>" method="POST"> 
                    <div class="row">
                        <input type="hidden"  name="id" id="id" value="" >

                        <div class="mb-3">
                          <label class="form-label" for="nombre" >Nombre </label>
                          <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre')?>" id="nombre" required="true" placeholder="nombre">
                          <small><?php echo form_error('nombre'); ?> </small>
                        </div>
                        <div class="mb-3">
                          <label  class="form-label" for="email"> E-mail </label>
                          <input type="email" class="form-control" name="email" value="<?php echo set_value('email')?>" id="email" required="true" placeholder="example@email.com">
                          <small><?php echo form_error('email'); ?> </small>
                        </div>
                        <div class="mb-3">
                          <label  class="form-label" for="telefono"> Telefono </label>
                          <input type="number" class="form-control" name="telefono" value="<?php echo set_value('telefono')?>" id="telefono" required="true" placeholder="123456">
                          <small><?php echo form_error('telefono'); ?> </small>
                        </div>
                        <div class="mb-3">
                          <label  class="form-label" for="fecha_nac"> Fecha de nacimiento </label>
                          <input type="date" class="form-control" name="fecha_nac" value="<?php echo set_value('fecha_nac')?>" id="fecha_nac" required="true" >
                          <small><?php echo form_error('email'); ?> </small>
                        </div>
                        <div class="mb-3">
                           <label class="form-label" for="contraseña"> Contraseña </label>
                           <input type="password" class="form-control" name="contraseña" value="<?php echo set_value('contraseña')?>" id="contraseña" required="true" placeholder="contraseña">
                           <small><?php echo form_error('contraseña'); ?> </small>
                        </div>
                         <div class="mb-3">
                           <label class="form-label" for="confcontraseña"> Confirmar contraseña </label>
                           <input type="password" class="form-control" name="confcontraseña" id="confcontraseña" required="true" placeholder="confirmación de contraseña">
                            <small><?php echo form_error('confcontraseña'); ?> </small>
                        </div>
                        <div class="flex-row mb-3 d-flex justify-content-center align-items-end">
                          <button type="submit" class="btn btn-primary " name="btnregistrar"  value="guardar" style="background-color: #216B79"> Registrarme </button>
                          <a href=" <?php echo base_url('Auth/LoginController')?>" class="px-3 " >Iniciar sesión</a>
                        </div>
                    </div>
                  </form>
                </div>

            </div>

          </div>
        </div>
      </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>

    </script>

  </body>

</html>