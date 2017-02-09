//Conexion to database Mysqli

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

function conectar(){
	$x=new mysqli("host","user","password","database"); //select the database
	/*if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}*/
	
	if ($x->connect_errno){
		die ("fallo".$x->mysqli_connect_errno().$x->mysqli_connect_error());
		exit(); 
	}
	
return $x;
}

function desconectar($r){
	mysqli_close($r);
}
?>
</body>
</html>
