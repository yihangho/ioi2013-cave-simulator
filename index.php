<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cave</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/randomize.js"></script>
	<script src="js/script.js"></script>
	<link rel=stylesheet href=css/bootstrap.min.css>
	<link rel=stylesheet href=css/switch.css>
	<link rel=stylesheet href=css/style.css>
</head>
<body>
	<div id="switch-container" >
		<?php for ($i=1; $i<=10; $i++):?>
			<span class="toggle">
				<input type="checkbox" id="switch<?php echo $i;?>">
				<label data-off="Up" data-on="Down"></label>
			</span>
		<?php endfor;?>
	</div>

	<div id="buttons-container">
		<button id="submit" class="btn btn-primary">Submit</button>
		<button id="new-game" class="btn">New game</button>
	</div>

	<div id="console" class="well"></div>
</body>
</html>