<!DOCTYPE html>
	<html lang="es">

		<head>
			<meta charset="UTF-8">
			<title>Entradas</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		    <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" type="text/css">

		</head>
<body>
<?php include "includes/header.php"; ?>
	<div class="container-fluid row">
	
		<h3>Formulario entradas</h3>

		<?php echo form_open_multipart('EntradasController/registro' , ['enctype'=>'multipart/form-data', 'id'=>'form-entradas']); ?>
		<div class="mb-3">
			<label class="form-label" >id usuario </label>
			
			<input type="hidden"  name="id" id="id" value="">
			<select type="text" class="form-control" name="id_usuario" id="id_usuario">

				<?php foreach ($usuarios as $usuario): ?> 

					<option value="<?php echo $usuario->id ?>" >
						<?php echo $usuario->id. " - " .$usuario->nombre; ?>
					</option>
				<?php endforeach; ?>
				
			</select>
		</div>
		<div class="mb-3">
			<label  class="form-label">Titulo</label>
			<input type="text" class="form-control" name="titulo" id="titulo" >
		</div> 
		<div class="mb-3">
			<label  class="form-label">Fecha</label>
			<input type="date" class="form-control" name="fecha" id="fecha" >
		</div>
		<div class="mb-3">
			<label  class="form-label">Texto</label>
			<input type="text" class="form-control" name="texto" id="texto">
		</div>
		<div class="mb-3">

			<label class="form-label">Subir imagen</label>
			<input name="imagen" id="imagen" type="file"/>

		</div>
		<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok"> Guardar </button>

		<?php echo form_close(); ?>

		<div class="col-12 ">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Id. entrada</th>
						<th scope="col">Id. Usuario</th>
						<th scope="col">Titulo</th>
						<th scope="col">Fecha</th>
						<th scope="col">Texto</th>
						<th scope="col">Imagen</th>
						<th scope="col"></th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($entradas as $entradas) { ?>
						<tr>
							<td ><?php echo $entradas->id; ?></td>
							<td><?php echo $entradas->id_usuario; ?></td>
							<td><?php echo $entradas->titulo; ?></td>
							<td><?php echo $entradas->fecha; ?></td>
							<td class="<?php echo strlen($entradas->texto) > 50 ? 'text-table' : ''; ?>"><?php echo $entradas->texto; ?></td>
							<td class=""><img src="uploads/images/<?php echo $entradas->imagen; ?>" style="height: 25px; width: 25px;"></td>
							<td> 
								<a href="javascript:void(0)" class="btn btn-small btn-warning" type="button" onclick="llenar_campos('<?php echo $entradas->id ?>','<?php echo $entradas->id_usuario ?>','<?php echo $entradas->titulo ?>','<?php echo $entradas->fecha?>','<?php echo $entradas->texto?>','<?php  echo $entradas->imagen; ?>' )">Editar</a>
							</td>
							<td><a href="<?php echo base_url('EntradasController/eliminar/'.$entradas->id) ?>" class="btn btn-small btn-danger"> Eliminar </a></td>
							<td><a href="<?php echo base_url('EntradasController/ver_detalle/'.$entradas->id) ?>" class="btn btn-small btn-success"> Ver mas </a></td>
						</tr> 
					<?php } ?>
				</tbody>
			</table>

		</div>     

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script>
		
		let url = "<?php  echo base_url('EntradasController/editar'); ?>" ;

		const llenar_campos = (id, id_usuario, titulo, fecha , texto , imagen) => {
			let path= url + "/" + id ;
			document.getElementById('form-entradas').setAttribute('action', path)
			document.getElementById('id_usuario').value = id_usuario;
			document.getElementById('titulo').value = titulo;
			document.getElementById('fecha').value = fecha;
			document.getElementById('texto').value = texto;
			document.getElementById('imagen').value = imagen;
		};

	</script>
	    <?php include "includes/footer.php"; ?>

</body>

</html>