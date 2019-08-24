<?php

$data = array(
	"0" => array(
		"id"      => "USR1",
		"name"    => "Steve Jobs",
		"company" => "Apple"
		)
);

$json = json_encode($data,JSON_PRETTY_PRINT);
//JSON_PRETTY_PRINT untuk merapihkan hasil data yang dibuat si JSON

if (file_put_contents("data.json", $json)) {
	echo "File JSON success created...";
}else{
	echo "Oops!, Fail Create File JSON";
}

?>