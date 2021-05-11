<?php
	session_start();
	
	// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	// $cleardb_server = $cleardb_url["host"];
	// $cleardb_username = $cleardb_url["user"];
	// $cleardb_password = $cleardb_url["pass"];
	// $cleardb_db = substr($cleardb_url["path"],1);
	// $active_group = 'default';
	// $query_builder = TRUE;

	// // Define database
	define('dbhost', 'eu-cdbr-west-01.cleardb.com');
	define('dbuser', 'b0b59d4a1f6fd9');
	define('dbpass', '81d91fbc');
	define('dbname', 'heroku_f59da343fb0a9cc');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	// Connect to DB
	// $connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>
