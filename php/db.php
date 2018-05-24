<?php 
	$dbh = new PDO('mysql:host=LOCALHOST;dbname=testsql','root','');
	$results = $dbh->query("SELECT * FROM student");
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
	$json = json_encode($data);
	
	$filename = 'json/data/members.json';
	$path = 'php/json/data/';
	if (!file_exists($path)) 
	{
		$doc = mkdir('json/data', 0777, true);
	}
	if(isset($json)) 
	{
		$handle = fopen('/php/json/color.json', 'w');
		// var_dump($handle);die;
		fwrite($handle,$json);
		fclose($handle);
	}
?>