<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <title>Lista</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div class="container-fluid">	
		<br>
		<a href="#modal1" class="btn btn-primary btn-lg" data-toggle="modal">Boton</a>
		<div class="modal fade" id="modal1">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- modal HEADER -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			
						<h4 class="modal-tittle">Encabezado de mi ventana</h4>
					</div>
					
					<!-- modal CONTENT -->
					<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, mei an persius fabellas. Officiis splendide ut per, qui cetero fierent erroribus ei. Et eum nibh neglegentur, modus admodum noluisse eu nec. Ius natum graece ex, fugit animal prodesset duo ei, senserit facilisis interpretaris et ius. </p>
					</div>
					
					<!-- modal FOOTER -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar </button>
						<button type="button" class="btn btn-primary">Guardar Cambios </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
