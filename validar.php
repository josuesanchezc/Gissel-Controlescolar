<html>
<head>
<style>
</style>
</head>
<body>

<?php

class Validar 



{


public function accesos ($user,$psw)
{


$bandera=1;
if ($user==""  or $psw=="")
{
	echo"<div class='alert alert-danger  form-control input-lg' style='width:300px'> no debes dejar campos vacios </div>";
	   $bandera=0;
	  }  	  
include('db.php');
$sql="select * from usuario
where usuario='$user' and contrasena='$psw'";
$consulta=mysql_query($sql) or die (mysql_error());
$filas= mysql_num_rows ($consulta);
if ($filas==0 and $bandera==1)
{
echo"<div class='alert alert-danger  form-control input-lg' style='width:300px'> Usuario y contrasena Incorrectos </div>";
$bandera=0;
}

if ($bandera==1){
$consulta=mysql_query($sql) or die (mysql_error());
$idu=mysql_result($consulta,0,'id');
$activo=mysql_result($consulta,0,'estatus');


if ($activo=='0' and $bandera==1)
{
echo"<div class='alert alert-danger  form-control input-lg' style='width:300px'> Usuario desactivado </div>";
$bandera=0;
echo"$bandera";	
}
if ($bandera==1)
{
print "<meta http-equiv= 'refresh' content='0;
       url=accesos.php?idu=$idu'>";
	   exit;
}
}
}

}

?>