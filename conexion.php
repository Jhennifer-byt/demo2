<?php
	function conexion(){

	$host = "dpg-cr6g03bv2p9s7392u6s0-a";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_hydx";
	$user = "user=dbprueba_hydx_user";
	$password = "password=sXiVp5XxNE8xMMKvqg7THkLpun3gD5v4";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
