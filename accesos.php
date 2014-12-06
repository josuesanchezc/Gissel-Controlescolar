<?php

if($_GET)
{
$idu = $_GET['idu'];
}
include('db.php');
$sql="select * from usuario where id=$idu"; 
$consulta=mysql_query($sql) or die ("error en consulta");
$tipo=mysql_result ($consulta,0,'nivel'); 
if ($idu=="")
{
print "<meta http-equiv= 'refresh' content='0;
       url=login.php'>";
	   exit;
	   }
	   else
	   {
	   if ( $tipo=='2')
	   {
	   setCookie('idu',$idu);
	   setCookie('acceso',1);
	   session_start();
	   $_SESSION['idu']=$idu;
	   $_SESSION['acceso']=1;
	   print "<meta http-equiv= 'refresh' content='0;
       url=index.php?id=$idu'>";
	   exit;
	   }
	   if ( $tipo=='1')
	   {
	   setCookie('idu',$idu);
	   setCookie('acceso',1);
	   session_start();
	   $_SESSION['idu']=$idu;
	   $_SESSION['acceso']=1;
	   print "<meta http-equiv= 'refresh' content='0;
       url=TestUsuario.php?id=$idu'>";
	   exit;
	   }
	   }
	  
	   ?>
 