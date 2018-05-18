<?php 
	// die('fdhsk');
	$dbh = new PDO('mysql:host=LOCALHOST;dbname=testsql','root','');
	$results = $dbh->query("SELECT * FROM student");
	foreach($results AS $result){
		echo '<pre>';
			print_r($result);
		echo '</pre>';
	}

?>