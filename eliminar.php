<?php
include ('header.php');
include 'Materia.php';
require ('db.php');
$idmm=$_REQUEST['idmm'];

$Materia = new Materia();
$Materia->borrar($idmm);
?>

<div class="span8"><!--information zone-->
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Cuidado!</strong> La Materia ha sido borradas </div></div>
<a href='TestMateria.php'> Regresar</a>




