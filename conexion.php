<?php

	function conexion(){

	$host = "host=dpg-cvmpjc7diees73bpro8g-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=test_m6ty";
	$user = "user=wwwrojas";
	$password = "password=VT9jKLUtEu0QpUKrVzJz1m6sobuU3ov7";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>