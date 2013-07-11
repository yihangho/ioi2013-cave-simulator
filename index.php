<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cave</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js.php"></script>
	<link rel=stylesheet href=css/bootstrap.min.css>
</head>
<body>
	<div class="row">
		<div class="span2 offset6">
			<?php for ($i=1; $i<=8; $i++):?>
				Switch <?php echo $i;?>:<br>
				<label class="radio inline">
					<input type="radio" name="switch<?php echo $i;?>" value=1 checked>On
				</label>
				<label class="radio inline">
					<input type="radio" name="switch<?php echo $i;?>" value=1>Off
				</label>
				<br>
			<?php endfor;?>
		</div>
		<div class="span2">
			<?php for ($i=9; $i<=15; $i++):?>
				Switch <?php echo $i;?>:<br>
				<label class="radio inline">
					<input type="radio" name="switch<?php echo $i;?>" value=1 checked>On
				</label>
				<label class="radio inline">
					<input type="radio" name="switch<?php echo $i;?>" value=1>Off
				</label>
				<br>
			<?php endfor;?>
			<div>
				Moves left: <span id="moves_left">75</span>
			</div>
		</div>
	</div>
	
	<div class="row" style="margin-top: 10px;">
		<div class="span4 offset6">
			<button id="submit" class="btn btn-primary">Submit</button><button id="new_game" class="btn">New game</button>
		</div>
	</div>

	<div id="console" class="well" style="width: 90%; margin-left:auto;margin-right:auto;overflow-y:auto;max-height:100px;height:100px;s">
</body>
</html>