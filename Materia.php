<?php
/**
 * Created by PhpStorm.
 * User: juliocesar
 * Date: 25/09/14
 * Time: 07:20 PM
 */

class Materia {

    private $idm;
    private $nombre;
    private $avatar;
    private $orden;
    private $status;
	
    public function asignar_mat (){
}

 public function mostrar ($id)
    {
		
		echo" <table class='table table-striped'	><tr><td>Materia</td><td>eliminar</td></tr>";	
$table=mysql_query("SELECT ma.idmm ,m.nombre FROM maestro_ma AS ma , materia AS m WHERE m.idm=ma.idm AND id=$id");
while ($field =  mysql_fetch_array($table))
      {	
           $nmat= $field['nombre'];
		    $idmm= $field['idmm'];
		   echo"<tr><td>$nmat</td><td><a href='eliminar.php?idmm=$idmm'>eliminar</a></td></tr>";
}
	
	echo"</table>";
		
		
} 

public function borrar ($idmm)
{
$borrar=mysql_query("delete from maestro_ma where idmm=$idmm") or die (mysql_error());
}











}