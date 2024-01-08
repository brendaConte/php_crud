
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver mas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container-fluid row">


        <h3>Ver mas</h3>
      <input type="hidden"  name="id" id="id" value="">

    <div class="mb-3">
      <label class="form-label" >id usuario </label>
    </div>
    <div class="mb-3">
      <label  class="form-label">Titulo</label>
      <input type="text" class="form-control" name="titulo" id="titulo" >
    </div>
    <div class="mb-3">
      <label  class="form-label">Fecha</label>
      <input type="date" class="form-control" name="texto" id="texto" >
    </div>
       <div class="mb-3">
      <label  class="form-label">Texto</label>
      <input type="text" class="form-control" name="fecha" id="fecha">
    </div>
    <div class="mb-3">
      <label class="form-label">Imagen</label>
      <input type="text" class="form-control" name="imagen" id="imagen" >
    </div>
>    

   <div class="col-12 p-4">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">id_usuario</th>
      <th scope="col">Titulo</th>
      <th scope="col">Texto</th>
      <th scope="col">Fecha</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <?php 
foreach ($entradas as $entradas) { ?>
  <tr>
      <td><?php echo $entradas->id; ?></td>
      <td><?php echo $entradas->id_usuario; ?></td>
      <td><?php echo $entradas->titulo; ?></td>
      <td><?php echo $entradas->texto; ?></td>
      <td><?php echo $entradas->fecha; ?></td>
      <td><?php echo $entradas->imagen; ?></td>
      <td> 
        <a href="javascript:void(0)" class="btn btn-small btn-warning" type="button" onclick="llenar_campos('<?php echo $entradas->id ?>','<?php echo $entradas->id ?>','<?php echo $entradas->titulo ?>','<?php echo $entradas->texto?>','<?php  echo $entradas->imagen; ?>' )">Editar</a>
      </td>
      <td><a href="<?php echo base_url('EntradasController/eliminar/'.$entradas->id) ?>" class="btn btn-small btn-danger"> Eliminar </a></td>
      <td><a href="<?php echo base_url('EntradasController/ver_mas/'.$entradas->id) ?>" class="btn btn-small btn-success"> Ver mas </a></td>
  </tr> 
    <?php } ?>

  </tbody>
</table>

   </div>     

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   		<script>
 
		  let url = "<?php  echo base_url('Entradas/editar'); ?>" ;

		  const llenar_campos = (id, id_usuario, titulo, texto , fecha, imagen) => {
		    let path= url + "/" + id ;

		   	document.getElementById('form-entradas').setAttribute('action', path)
		    document.getElementById('id_usuario').value= id_usuario;
		    document.getElementById('titulo').value= titulo;
		    document.getElementById('texto').value= texto;
		    document.getElementById('fecha').value= fecha;
		    document.getElementById('imagen').value= imagen;
		  	};

		</script>

	</body>

</html>