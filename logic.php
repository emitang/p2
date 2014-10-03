<?php
$form = "";

for ($i = 4; $i <= 9; $i++) {
	$form = $form."<option value = '".$i."'>".$i."</option>";
}

$words = file('nounlist.txt');

$password = "";

$numwords = $_POST['numwords'];

if(isset($_POST['numwords']) && $numwords <> 0) {
	for ($i = 0; $i < $numwords; $i++) {
		$password = $password." ".$words[rand(1, 2335)];
	}
}
?>