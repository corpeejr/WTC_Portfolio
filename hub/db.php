<?php 

	$host 	= 	"localhost";
	$uname 	= 	"root";
	$upass  = 	'';
	$db 	=	"wilmot";

	$con = new mysqli($host, $uname, $upass, $db);


	if ($con->connect_error) {
		die("DB connection Error" . $con->connect_error);
	}


?>