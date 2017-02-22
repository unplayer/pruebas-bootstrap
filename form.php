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
		<form action="" class="">
		  <div class="form-group">
			  <label for="name">Nombre:<br> </label>
			  <input class="form-control" id="name" type="text" placeholder="Nombre: " >
		  </div>
		 
		 <div class="form-group">
			  <label for="option">Elige una opción:<br></label>
			  <select class="form-control" name="" id="option">
				<option value="">Opcion #1 </option>
				<option value="">Opcion #2 </option>
				<option value="">Opcion #3 </option>
				<option value="">Opcion #4 </option>
				<option value="">Opcion #5 </option>	
			  </select>
		</div>
		
		<div class="form-group">
			  <label for="message">Mensaje: </label>
			  <textarea class="form-control" id="message" placeholder="Escribe un manesaje">Archivo: </textarea>
		</div>
		
		<div class="form-group">
			  <label for="file">Archivo: </label>
			  <input id="file" type="submit" value="Submit">
			  <p class="">Maximo 50MB</p>
		 </div>
		 
		 <button class="btn btn-primary"> Enviar </button>
		</form> 
	</div>


	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
