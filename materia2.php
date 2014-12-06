<?php
include'db.php';


echo"<div id='materia'>";
include'Materia.php';
$materia=$_REQUEST['materia'];
$id=$_REQUEST['id'];

$corroborar="select idmm from maestro_ma where id=$id and idm=$materia";
$correr=mysql_query($corroborar);
$cuantos=mysql_num_rows($correr);
if ($cuantos==0)
{
$sql="insert into maestro_ma (id,idm) values($id,$materia)";
$exec=mysql_query($sql);
$asignar="select m.nombre from materia as m, maestro_ma as ma where id=$id and ma.idm=m.idm";
$execute=mysql_query($asignar)  or die (mysql_error());
$cuant=mysql_num_rows($execute);
if ($cuant==0)
{
echo"<h2> No hay materias asigandas</h2>";
	}
else

{
	$Materia= new Materia();
	$Materia->mostrar($id);
	
	
	
}
}
else
{
	
	echo"<h1> La materia ya se asigno</h1>";
	
	}

?><div style="margin-top:20px;">
<form action='materia1.php' method='GET' target='_self' id='mat' name='frmd' enctype="multipart/form-data">
<?php

echo"<select name='materia'>";

$materias="select * from materia";
$execute=mysql_query($materias) or die (mysql_error());
while ($field =  mysql_fetch_array($execute))
{
  $idm= $field['idm'];
    $nombre= $field['nombre'];
    $apellido_p= $field['apellido_paterno'];
    echo"<option value=$idm>$nombre</option>";
}echo"<input type='hidden' name='id' value=$id>";
?>
</select>
<input type="submit" name="submit" id="submit" value="Agregar" align="right" class="btn-default">          
</form>
</div>

<script type="text/javascript"><!--function ajax-->
$(function (e) {
	$('#mat').submit(function (e) {
		e.preventDefault()
		$('#materia').load('materia2.php?' + $('#mat').serialize())
	})
})