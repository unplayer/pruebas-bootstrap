<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<form action="" class="form-inline">
		  <div class="form-group">
			  <label class="sr-only" for="name">Nombre:<br> </label>
			  <input class="form-control" id="name" type="text" placeholder="Nombre: " >
		  </div>
		 
		 
		  <div class="form-group">
			<div class="input-group">
			  <label class="sr-only" for="email">Correo:<br> </label>
			  <div class="input-group-addon">@</div> 
			  <input class="form-control" id="email" type="text" placeholder="Correo: " >
			</div>
		  </div>
		
		<div class="checkbox">
			  <label> 
				<input type="checkbox" name="" id="">Recuerdame </input>
			  </label>
		</div>
		
		
		 <button class="btn btn-primary"> Enviar </button>
		</form> 
	</div>


	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
