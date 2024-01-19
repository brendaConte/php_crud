
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
            <title>Ver mas</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">

    </head>    

    <body>
     <?php include "includes/header.php"; ?>
      <div class="row">
        <div class="col-12 col-md-6">

            <div class="card card-detail" style="width: 100%;">
                <div class="card-body card-detail-body">
                    <img src="/uploads/images/<?php echo $entradas->imagen; ?>" style="height: 150px;object-fit: cover;width: 100%;">
                    <h5 class="card-title card-detail-title"><?php echo $entradas->titulo; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $entradas->fecha; ?> </h6>
                    <p class="card-text card-detail-text"><?php echo $entradas->texto; ?></p>
                   <div class="card-link card-detail-links">
                        <a  href="<?php echo base_url('EntradasController') ?>" class="card-link">Volver</a>
                        <a  href="<?php echo base_url('Welcome/ver_listado/').$entradas->id_usuario ?>" class="card-link">Entradas del usuario</a>
                    </div> 
                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </div>
        <?php include "includes/footer.php"; ?>

    </body>

</html>