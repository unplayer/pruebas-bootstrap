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
		<div class="btn-group">
			<button class="btn btn-default">Texto</button>
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li role="presentation" class="dropdown-header">Header</li>
				<li class="divider"></li>
				<li role="presentation"><a href="#">HTML</a></li>
				<li role="presentation"><a href="#">CSS</a></li>
				<li role="presentation"><a href="#">JavaScript</a></li>
			</ul>
		</div>
		
		
		<div class="form-group">
			<div class="input-group">
			<span class="input-group-addon"> 
				<input type="checkbox">
			</span>
			<input type="text" class="form-control	">
		</div>
		</div>

	</div>

	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
