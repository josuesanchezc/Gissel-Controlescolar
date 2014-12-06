<?php

	
class Grupo
	{
	
	private $id;
	private $nombre;
	private $apm;
	private $app;
	private $grupo;
	private $idg;
	private $gnombre;
			
	public function mostrar (){
	require ('db.php');
	?>
    <div id=title> <h3>Asignar Alumnos a Grupos</h3><br><hr><br></div>
    <div class="table">
    	
        <table class='table table-striped'>
        <tr>
        <th>ID</th><th>Nombre Alumno </th><th> Seleccion </th>
        </tr>
    	<?php
		$alumnos="select id, nombre, apellido_paterno , apellido_materno from usuario where nivel=1 and estatus=1 and grupo='0'";
			$calumnos=mysql_query($alumnos);
				while ($field = mysql_fetch_array($calumnos))
      				{
          				$this->id = $field['id'];
						$this->nombre = $field['nombre'];
						$this->app = $field['apellido_paterno'];
						$this->apm = $field['apellido_materno'];
					echo"<tr>
								
						 <td> $this->id </td><td> $this->nombre $this->app $this->apm</td>
						 <form action='#' method='POST' name='frmdo' id='frmdo'>
						 <td> <input type=checkbox name='salon[]' value='$this->id'></td></tr>
					";  				
					}
			
    	?>
    </div>
    	</table>        
		<?php
				echo"<div class='form-group>
						<label for='select'>Selecciona Grupo</label>
							<select name='grupo'>";
		 $grupo="select idg,nombre from grupo where estatus=1";
		 	$cgrupo=mysql_query($grupo)or die (mysql_error());
				while ($field = mysql_fetch_array($cgrupo))
      				{
		 				$this->idg = $field['idg'];
						$this->gnombre = $field['nombre'];
						echo"<option value='$this->idg'>$this->gnombre</option>";
		 
					}
		?>
        </select>
        	</div>
            <div class='form-group' style="padding-top:20px"><input type="submit" name='submit' class="btn btn-success" value="Enviar"></form></div>
    <?php
	
	if (isset($_POST['submit'])){
		
		  if (isset ($_POST['salon'])){
			  
			foreach($_POST['salon'] as $nombre)
			{
			$grupo=$_POST['grupo'];	
			 $this->agregar($grupo,$nombre);
			}
			
		} 		
	}
}



public function agregar ($grupo,$nombre)
{
	$validar=mysql_query("select id from alumnos_g where id=$nombre");
	$rows=mysql_num_rows($validar);
	
	if($rows==0)
	{
	$sql=mysql_query("insert into alumnos_g (idg,id) values ($grupo,$nombre)") or die (mysql_error());
	$sql2=mysql_query("update usuario set grupo='1' where id=$nombre");
	}
	?>
<script>
location.reload();
</script>
<?php	
}

public function listas()
{
	?>
	 <div id=title> <h3>Lista de alumnos</h3><br><hr><br></div>
    <div class="table">
    	
        <table class='table table-striped'>
        <tr>
        <th>ID</th><th>Nombre Alumno </th><th>Salon</th><th> Seleccion </th>
        </tr>
    	<?php
		$alumnos="SELECT u.id, u.nombre, u.apellido_paterno , u.apellido_materno, g.nombre as grupo FROM usuario AS u , alumnos_g AS ag, grupo AS g WHERE ag.`id`=u.id AND g.idg=ag.idg AND u.nivel=1 AND u.estatus=1 AND u.grupo='1' order by u.grupo";
			$calumnos=mysql_query($alumnos);
				while ($field = mysql_fetch_array($calumnos))
      				{
          				$this->id = $field['id'];
						$this->nombre = $field['nombre'];
						$this->app = $field['apellido_paterno'];
						$this->apm = $field['apellido_materno'];
						$this->grupo=$field['grupo'];
					echo"<tr>
								
						 <td> $this->id </td><td> $this->nombre $this->app $this->apm</td>
						 <td>$this->grupo</td><form action='#' method='POST' name='frmdo' id='frmdo'>
						 <td> <input type=checkbox name='salon[]' value='$this->id'></td></tr>
					";  				
					}
			
    	?>
    </div>
    	</table>        
        </select>
        	</div>
            <div class='form-group' style="padding-top:20px"><input type="submit" name='submit2' class="btn btn-success" value="Quitar"></form></div>
    <?php
	
	if (isset($_POST['submit2'])){
		echo"si jala";	
		  if (isset ($_POST['salon'])){
			  
			foreach($_POST['salon'] as $nombre)
			{
			
			 $this->delete($nombre);
			 
			 
			}
			
		} 		
	}
}
	
function delete ($nombre){
$delte=mysql_query("delete from alumnos_g where id=$nombre");
$update=mysql_query("update usuario set grupo='0' where id=$nombre");
?>
<script>
location.reload();
</script>
<?php	
}
	

}
	?>