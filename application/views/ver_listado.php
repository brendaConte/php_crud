
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de entradas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>                        

        <body>
            <div class="container">
                <div class="row">
                    <?php foreach($entradas as $entry) { ?>
                        <div class="col-3 p-10 gap-2 mt-3">
                            <div class="card">

                                 <div class="card-body">

                                    <h5 class="card-title"> <?php echo $entry->id_entrada; ?> </h5>

                                    <h5 class="card-title"> <?php echo $entry->id_user; ?> </h5>

                                    <h5 class="card-title"> <?php echo $entry->titulo; ?> </h5>

                                    <p class="card-text"> <?php echo $entry->texto; ?> </p>                    

                                    <p class="card-text"> <?php echo $entry->fecha; ?> </p>

                                    <a href="<?php echo base_url('EntradasController/ver_detalle/'. $entry->id_entrada) ?>" class="btn btn-primary">Ver más</a> 

                                </div>

                            </div>

                         </div>
                    <?php } ?>
                </div>
            </div>
      

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        </body>

</html>