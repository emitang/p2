<?php
$form = "";

for ($i = 4; $i <= 9; $i++) {
	$form = $form."<option value = '".$i."'>".$i."</option>";
}

$words = file('nounlist.txt');

$password = "";

$numwords = $_POST['numwords'];

if(isset($_POST['numwords']) && $numwords >= 4 && $numwords <=9) {
	for ($i = 0; $i < $numwords; $i++) {
		$password = $password." ".$words[rand(1, 2335)];
	}
}

$symbols = file('symbols.txt');

if($_POST['symbol'] == "true") {
	$password = $password.$symbols[rand(1, 12)];
}

if($_POST['number'] == "true") {
	$password = $password.rand(1, 9);
}

?>