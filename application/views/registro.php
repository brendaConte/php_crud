<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>
  <div class="py-5"> 

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">

          <div class="card shadow">

            <div class="card-header">
             <h5>Registro</h5>
            </div>

            <div class="card-body">
              <form action="<?php echo base_url('login') ?>" method="POST"> 
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
                           <label class="form-label" for="contraseña"> Contraseña </label>
                           <input type="password" class="form-control" name="contraseña" id="contraseña" required="true" placeholder="contraseña">
                           <small><?php echo form_error('contraseña'); ?> </small>
                        </div>
                         <div class="mb-3">
                           <label class="form-label" for="confcontraseña"> Confirmar contraseña </label>
                           <input type="password" class="form-control" name="confcontraseña" id="confcontraseña" required="true" placeholder="confirmación de contraseña">
                            <small><?php echo form_error('confcontraseña'); ?> </small>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary " name="btnregistrar"  value="guardar"> Iniciar sesión </button>
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