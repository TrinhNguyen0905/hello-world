<?php 
	$fileNameJson = 'brand.json';
	//  đầu tiền là phải check thử file json đó có tồn tại hay không?
	//  file_get_contents : read data từ filejson
	// json_decode , true : convert data json từ kiểu json chuyển qua array
	if(isset($fileNameJson)) {
		$arr = json_decode(file_get_contents($fileNameJson), true);

		foreach ($arr as $key => $value) {
			$arrBrand = $value;
			echo '<pre>';
			var_dump($arrBrand);
		}
	}
	else
	{
		echo "Khong tim thay";
	}
?>