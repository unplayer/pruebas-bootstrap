<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <title>Tabs</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div class="container">		
		<div class="row">
			<div class="col-md-5">
				<div class="tabpanel">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#section1" aria-controls="section1" data-toggle="tab" role="tab">Seccion #1 </a></li>
						<li role="presentation"><a href="#section2" aria-controls="section2" data-toggle="tab" role="tab"> Seccion #2 </a></li>
						<li role="presentation"><a href="#section3" aria-controls="section3" data-toggle="tab" role="tab"> Seccion #3</a></li>
					</ul>	
					
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="section1">
							<h3>Lorem ipsum dolor sit amet, legimus qualisque torquatos sea at. #1</h3>
							<p>Ius discere accumsan hendrerit no, modus graeci luptatum ea est. Cu cum harum platonem, vel error 
							similique eu. Sumo dicunt cotidieque vim at, debet iisque admodum et est, quo doctus definitionem at. 
							Sint legere delectus te mel, eu porro commodo platonem eos.</p>
						</div>
						
						<div role="tabpanel" class="tab-pane" id="section2">
							<h3>Lorem ipsum dolor sit amet, legimus qualisque torquatos sea at. #2</h3>
							<p>Ius discere accumsan hendrerit no, modus graeci luptatum ea est. Cu cum harum platonem, vel error 
							similique eu. Sumo dicunt cotidieque vim at, debet iisque admodum et est, quo doctus definitionem at. 
							Sint legere delectus te mel, eu porro commodo platonem eos.</p>
						</div>
						
						<div role="tabpanel" class="tab-pane" id="section3">
							<h3>Lorem ipsum dolor sit amet, legimus qualisque torquatos sea at. #3</h3>
							<p>Ius discere accumsan hendrerit no, modus graeci luptatum ea est. Cu cum harum platonem, vel error 
							similique eu. Sumo dicunt cotidieque vim at, debet iisque admodum et est, quo doctus definitionem at. 
							Sint legere delectus te mel, eu porro commodo platonem eos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
