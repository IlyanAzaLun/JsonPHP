<?php

$read = file_get_contents("data.json");

$data = json_decode($read, true);

foreach ($data as $key) {
  echo $key["id"]."<br>";
  echo $key["name"]."<br>";
  echo $key["company"]."<br>";
}

?>