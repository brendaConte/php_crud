<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="py-2"> 

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <?php if($this->session->flashdata('status')) : ?>
            <div class="alert alert-success">
              <?= $this->session->flashdata('status'); ?>
            </div>
              <?php endif; ?>
            <div class="card shadow">

              <div class="card-header"  style="background-color: #216B79; color: white;">
               <h5>Iniciá sesión</h5>
              </div>

                <div class="card-body">
                  <form action="<?php echo base_url('login') ?>" method="POST"> 
                    <div class="row">
                        <input type="hidden"  name="id" id="id" value="" >

                        <div class="mb-3">
                          <label  class="form-label" for="email"> E-mail </label>
                          <input type="email" class="form-control" name="email" value="<?php echo set_value('email')?>" id="email" required="true" placeholder="example@email.com">
                          <small><?php echo form_error('email'); ?> </small>
                        </div>
                        <div class="mb-3">
                           <label class="form-label" for="contraseña"> Contraseña </label>
                           <input type="password" class="form-control" name="contraseña" value="<?php echo set_value('contraseña')?>" id="contraseña" required="true" placeholder="contraseña">
                           <small><?php echo form_error('contraseña'); ?> </small>
                        </div>
                        <div class="flex-row mb-3 d-flex justify-content-center align-items-end">
                          <button type="submit" class="btn btn-primary " name="btnlogin"  value="guardar" style="background-color: #216B79">Iniciar</button>
                          <a href=" <?php echo base_url('Auth/RegistroController/registro')?>" class="px-3 " >Registrarme</a>
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