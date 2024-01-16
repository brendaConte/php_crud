
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
            <title>Ver mas</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
         <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 300px; /* Ajusta el ancho según tus necesidades */
            height: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            align-items: center;
        }
        .card-body {
            flex-grow: 1;  /* Hace que el contenido principal de la tarjeta ocupe todo el espacio disponible */
            display: flex;
            flex-direction: column;
            justify-content: space-between;  /* Alinea los elementos verticalmente con espacio entre ellos */
        }
        .card-link {
            margin-top: auto;  /* Empuja los enlaces hacia la parte inferior */
            padding-bottom: 10px;
        }

        .card-text{
            overflow-y: scroll;
            height: 200px;
        }
        .card-title{
    padding-top: 15px;
}
       
    </style>

    </head>                        

    <body>

        <div class="col-12 col-md-6">

            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <img src="<?php echo $entradas->imagen ?>" style="height: 150px;object-fit: cover;width: 100%;">
                    <h5 class="card-title"><?php echo $entradas->titulo; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $entradas->fecha; ?> </h6>
                    <p class="card-text"><?php echo $entradas->texto; ?></p>
                   <div class="card-link">
                        <a  href="<?php echo base_url('EntradasController') ?>" class="card-link">Volver</a>
                        <a  href="<?php echo base_url('Welcome/ver_listado/').$entradas->id_usuario ?>" class="card-link">Entradas del usuario</a>
                    </div> 
                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>

</html>