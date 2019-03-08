<?php
	$namehost = 'localhost';
	$userhost = 'root';
	$passhost = '';
	$database = 'messenger';

	
	$cn = mysqli_connect($namehost, $userhost, $passhost, $database);

	
	if (!$cn)
	{
		echo 'Could not connect to database.';
	}
?>