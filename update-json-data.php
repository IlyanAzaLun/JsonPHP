<?php 

$read = file_get_contents("data.json");

$data = json_decode($read, true);

foreach ($data as $key => $value) {
	if ($value["id"] == "USR2") {
		$data[$key]["name"] = "New Name";
		$data[$key]["company"] = "New Company";
	}
}

$json = json_encode($data, JSON_PRETTY_PRINT);

if(file_put_contents("data.json", $json))
	{
		echo "Data Success full changed";
}else{
	echo "Oops!, Fail Changed data in JSON";
}
	

?>