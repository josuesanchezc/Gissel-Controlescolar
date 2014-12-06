

<?php

include ('header.php');
include ('db.php');
echo"<div class='container'>
<div  class='span4'	 style='margin:40px;'>
<div class='panel panel-default'>
      <div class='panel-heading'>
        <h3>Asignar Materias</h3>
      </div>
      <div class='panel-body'>";
?>
<div class='form-group'>
<label for='mao'>Profesor</label>
<form action='TestMateria.php' method='GET' target='_self' id='frmd' name='frmd'>
<?php

echo"<select name='maestro'>";

$maestros="select id,nombre,apellido_paterno from usuario where nivel=2";
$execute=mysql_query($maestros) or die (mysql_error());
while ($field =  mysql_fetch_array($execute))
{
  $id= $field['id'];
    $nombre= $field['nombre'];
    $apellido_p= $field['apellido_paterno'];
    echo"<option value=$id>$nombre $apellido_p</option>";
}
?>
</select>
<input type="submit" name="submit" id="submit" value="Siguiente" align="right" class="btn-default">          
</form>

<div id='table' style="margin-top:50px;">


</div></div></div></div>

<script type="text/javascript"><!--function ajax-->
$(function (e) {
	$('#frmd').submit(function (e) {
		e.preventDefault()
		$('#table').load('materia1.php?' + $('#frmd').serialize())
	})
})
</script>





