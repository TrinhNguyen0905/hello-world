<?php 
	// connect db
	$dbh = new PDO('mysql:host=LOCALHOST;dbname=testsql','root','');
	$results = $dbh->query("SELECT * FROM student");
//  fetchAll(PDO::FETCH_ASSOC); trả về một mảng chứa tất cả các hàng của result
	$data = $results->fetchAll(PDO::FETCH_ASSOC);
//  chuyển data từ array qua json
	$json = json_encode($data);
	
	$path = 'php/';
	$filename = 'members.json';
	if (!file_exists($path)) 
	{
		//Lưu ý rằng 0777 đã là chế độ mặc định cho các thư mục và có thể vẫn được sửa đổi bởi umask hiện tại.
		$doc = mkdir('json/data', 0777, true);
		if(isset($json)) 
		{
			$handle = fopen($filename,'w+');
			fwrite($handle,$json);
			fclose($handle);
		}
	}
	// foreach($data AS $result){
	// 	echo '<pre>';
	// 		print_r($result);
	// 	echo '</pre>';
	// }
	$dir = "json/data";
	var_dump(is_dir($dir));
	// Open a directory, and read its contents
	if (is_dir($dir)){
		
	  if ($dh = opendir($dir)){
	    while (($file = readdir($dh)) !== false){
	      echo "filename:" . $file . "<br>";
	    }
	    closedir($dh);
	  }
	}

?>