<?php
include'db.php';
require'Materia.php';
$id=$_REQUEST['maestro'];
$asignar="select m.nombre from materia as m, maestro_ma as ma where id=$id and ma.idm=m.idm";
$execute=mysql_query($asignar)  or die (mysql_error());
$cuantos=mysql_num_rows($execute);
if ($cuantos==0)
{
echo"<h2> No hay materias asigandas</h2>";
	}
else

{
$Materia=  new Materia();
$Materia->mostrar($id);
}
?>
</table>
<div style="margin-top:20px;">
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
}
echo"<input type='hidden' name='id' value=$id>";
?>
</select>
<input type="submit" name="submit" id="submit" value="Agregar" align="right" class="btn-default">          
</form>

<div id='materia'></div>

<script type="text/javascript"><!--function ajax-->
$(function (e) {
	$('#mat').submit(function (e) {
		e.preventDefault()
		$('#table').load('materia2.php?' + $('#mat').serialize())
	})
})
</script>

