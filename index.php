<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>p2</title>
	<?php require 'logic.php'; ?>
	<style>
	#header {
		width: 70%;
		left: 15%;
		position: absolute;
		max-height: 15%;
		min-height: 80px;
		background-color: #FFFFFF;
		float: left;
		border-style: solid;
		border-width: 1.5px;
		border-color: #071419;
		border-radius: 12px;
		-moz-border-radius: 12px;
		padding: 0px;
		margin: 0px;
		top: 10px;
		text-align: center;
	}
	body {
		margin: 0px;
		padding: 0px;
		background-color: #96A8C8;
		font-family: Lucida, Helvetica, sans-serif;
		font-variant: small-caps;
	}

	#gen-wrapper {
		margin-top: 100px;
		margin-left: 0px;
		text-align: center;
		background-color: #96A8C8;
	}

	#ref-wrapper {
		margin-top: 7px;
		top: 0;
		margin-bottom: 50px;
	}

	#generator {
		background-color: #FFFFFF;
		border-style: solid;
		border-width: 1.5px;
		border-color: #071419;
		border-radius: 12px;
		-moz-border-radius: 12px;
		width: 70%;
		margin-left: 15%;

	}
	#pic {
		background-color: #FFFFFF;
		border-style: solid;
		border-width: 1.5px;
		border-color: #071419;
		border-radius: 12px;
		-moz-border-radius: 12px;
		max-width: 70%;
		margin-left: 15%;
		float: center;
		position: relative;
	}
	#refpic {
		width: 94%;
		margin-left: 3%;
		margin-bottom: 5%
		}
	</style>
</head>
<body>
	<div id="header">
		<h1>xkcd Password Generator</h1>
	</div>
	<div id="gen-wrapper">
		<div id = "generator">
			<p>How Many Words? 
				<form method = 'POST' action = 'index.php'>
					<select name = "numwords">
						<option value = "0">Select...</option>
						<?php echo $form; ?>
					</select>
					<br><input type="checkbox" name="symbol" value="true">Include a symbol<br>
					<input type="checkbox" name="number" value="true">Include a number<br>
					<input type = "submit" name = "go!"><br>
				</form>
			</p>
	 		<?php 
			if($password <> "") {
	  			echo $password;
			} 
			else {
				echo "Select a number of words to generate a password!";
			}
			?>
			<br>
			<br>
		</div>
	</div>
	<div id = "ref-wrapper">
		<div id="pic">
			<br>
			<a href = "http://xkcd.com/936/"><img id="refpic" src = "http://imgs.xkcd.com/comics/password_strength.png" alt = "xkcd password strength"></a>
			<br>
		</div>
	</div>
</body>
</html>