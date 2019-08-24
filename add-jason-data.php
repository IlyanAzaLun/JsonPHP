<?php 

$read = file_get_contents("data.json");

$data = json_decode($read, true);

$newData = array(
		"id"      => "USR2",
		"name"    => "Linus Torvalds",
		"company" => "Linux"
);

echo(array_push($data,$newData));

$json = json_encode($data, JSON_PRETTY_PRINT);


if (file_put_contents("data.json",$json)) {
	echo "Success add Data on JSON..";
}else{
	echo "Failed add Data on JSON..";
}

 ?>