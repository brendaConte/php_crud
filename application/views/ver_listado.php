
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de entradas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
.text-table{ display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width:100px;
}   
.container{
    padding-top: 20px;
}
.card-link{
    padding-right: 60px;
}
.card-title{
    padding-bottom: 20px;
}
</style>
</head>                        

        <body>
            <div class="container ">
                <div class="row ">

                    <?php foreach($entradas as $entry) { ?>
                    <div class="col-4" style="margin-bottom: 30px;">
                        <div class="card" style="width: 100%;">
                        <div class="card-body">

                                <img src="<?php echo $entry->imagen ?>" style="height: 150px;object-fit: cover;width: 100%;">
                                <h5 class="card-title"><?php echo $entry->titulo; ?> </h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $entry->fecha; ?> </h6>
                                <p class="card-text"><?php echo $entry->titulo; ?></p>
                                <div class="card-link">
                                     <a  href="<?php echo base_url('EntradasController') ?>" class="card-link">Volver</a>
                                     <a href="<?php echo base_url('EntradasController/ver_detalle/'. $entry->id_entrada) ?>" class="btn     btn-primary">Ver más</a> 
                                </div> 
                        </div>
                    </div>
                        
                    </div>
                             <?php } ?>

                </div>
            </div>
      
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        </body>

</html>