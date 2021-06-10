<?php 

include_once("admclientes.php");
	
		

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMB Clientes</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">



	<script src="https://kit.fontawesome.com/5ba6711fce.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<header style="text-align: center; padding: 2em"><h1>Registro de Clientes</h1></header>

	<main>
		
		


		<div>
			
			<form action=""  method="post" enctype="multipart/form-data" >
				
				<label for="txtDni">DNI: *</label>
				<input  class="form-control" type="text" name="txtDni">

				<label for="txtNombre">Nombre: *</label>
				<input class="form-control" type="text" name="txtNombre">

				<label for="txtTelefono">Telefono: </label>
				<input class="form-control" type="text" name="txtTelefono">

				<label for="txtCorreo">Correo: *</label>
				<input class="form-control" type="text" name="txtCorreo">



				<p>Archivo adjunto <input type="file" name="archivo" accept=".jpg .jpeg, .png" multiple> <span>No se eligio archivo</span> </p>
				<p>Archivos admitidos .jpg .jpeg .png</p>
				<div   >
				<button type="submit" name="btnSubmit" class="btn btn-primary"> Guardar</button>
				</div>

			</form>
			

		</div>

			<?php 

				$id = isset($_GET["id"]) && $_GET["id"] != "" ? $_GET["id"] : "";


				
			 ?>

		<div>	 
			
			<table class="table" style="text-align: center;">
				
				<thead>
					
					<th  class="table-light">Imagenes</th>
					<th  class="table-light">DNI</th>
					<th  class="table-light">Nombre</th>
					<th  class="table-light">Correo</th>
					<th  class="table-light">Telefono</th>
					<th  class="table-light">Acciones</th>

				</thead>

				<tbody>
						
					<?php foreach ($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td><?php  ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td style="width: 110px;">
                                <a href="index.php?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?id=<?php echo $pos; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>

						

						 	



				</tbody>

			</table>

		</div>


	</main>

	
</body>
</html>