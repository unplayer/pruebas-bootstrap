<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
	
	<style>
		body{
			padding-top: 80px;
		}
	</style>
</head>
<body>
	<div class="container">
		<br>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">UVEG </a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1" > 
						<ul class="nav navbar-nav">
							<li> <a href="#">Item #1 </a></li>
							<li class="active"> <a href="#">Item #2</a></li>
							<li class="dropdown"> 
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Dropdown <span class="caret"> </span>				
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Item #1</a></li>
									<li><a href="#">Item #2</a></li>
									<li class="divider"></li>
									<li><a href="#">Item #4</a></li>
									
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-left" role="search" >
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar">
							</div>
						</form>
						
						<ul class="nav navbar-nav navbar-right">
							<li> <a href="#">Item #1 </a></li>
							<li class="active"> <a href="#">Item #2</a></li>
							<li class="dropdown"> 
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Dropdown <span class="caret"> </span>				
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Item #1</a></li>
									<li><a href="#">Item #2</a></li>
									<li class="divider"></li>
									<li><a href="#">Item #4</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					
				</div>
			
			</nav>
		</header>

	</div>

	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
