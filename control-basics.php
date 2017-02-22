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
		<form class="form-horizontal">
		
		  <div class="form-group">
			  <label>Nombre</label>			
			  <input class="form-control" type="text" placeholder="Nombre">		</input>	
		  </div>
		  
		  <div class="form-group">
			<label>TextArea</label>			
			<textarea class="form-control" type="text" placeholder="TextArea">	</textarea>		
		  </div>
		  
			<div class="checkbox">
				<label>
					<input type="checkbox" name="" id=""> Checkbox #1		
				</label>
			</div>
			
			<div class="checkbox">
				<label>
					<input type="checkbox" name="" id=""> Checkbox #2			
				</label>
			</div>
			
			<div class="checkbox">
				<label>
					<input type="checkbox" name="" id=""> Checkbox #3			
				</label>
			</div>
		
			<div class="radio">
				<label>
					<input type="radio" name="opcion" id="radio1" disabled> Radio Button #1	
				</label>
			</div>
			
			<div class="radio">
				<label>
					<input type="radio" name="opcion" id="radio2"> Radio Button #2		
				</label>
			</div>
			
			<div class="radio">
				<label>
					<input type="radio" name="opcion" id="radio3"> Radio Button #3			
				</label>
			</div>

		  
		  <div class="form-group">
			<div class="">
			  <button type="submit" class="btn btn-default">Enviar</button>
			</div>
		  </div>
		  
		</form>
	</div>


	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
