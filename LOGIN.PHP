<?php

$dbhost= "localhost";

$dbuser="root";

$dbpass="";

$dbname="test";

$conn=mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn)

{

die("No hay conexion: " .mysqli_cinnect_error());

}

$nombre=$_post ["txtusuario"];
$PASS=$_post ["txtpassword"];

$query=mysqli_query($conn,"SELECT*FROM login WHERE usuario=' " .$nombre. " ' and password=' " .$pss. " ' ");
$nr=mysqli_num_rows($query);

if($nr== 1)

{

//header("Location: pagina.html")

echo "Bienvenido:".$nombre;

}


else if($nr== 0)

{

echo "No ingreso";

}


?>

