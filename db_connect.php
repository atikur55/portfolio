<?php
	
	$hostname = "localhost";
	$hostuser = "root";
	$hostpass = "";
	$db_name = "portfolio";;

	$connect = mysqli_connect($hostname,$hostuser,$hostpass,$db_name);

	if(!$connect)
	{
		echo "Database Connected Error !!";
	}

?>