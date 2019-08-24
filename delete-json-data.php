<?php 

$read = file_get_contents("data.json");
$data = json_decode($read, true);


$arr_index = array();
foreach ($data as $key => $value) {
	if ($value['id'] == "USR5") {
		$arr_index[] = $key;
	}
}
foreach ($arr_index as $key) {
	unset($data[$key]);
}

$json_arr = array_values($data);


$json = json_encode($json_arr, JSON_PRETTY_PRINT);

if(file_put_contents("data.json", $json))
	{
		echo "Data Success Delete Data";
}else{
	echo "Oops!, Fail Delete data in JSON";
}
 ?>