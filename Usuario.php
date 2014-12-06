<?php
/**
 * Created by PhpStorm.
 * User: juliocesar
 * Date: 12/09/14
 * Time: 06:07 PM
 */

class Usuario {

    private $id;
    private $nombre;
    private $apellido_Paterno;
    private $apellido_Materno;
    private $telefono;
    private $calle;
    private $numero_exterior;
    private $colonia;
    private $municipio;
    private $estado;
    private $cp;
    private $correo;
    private $usuario;
    private $contrasena;
    private $nivel;
    private $estatus;

    public function create_usuario ($nombre,$apellidop,$apellidom,$telefono,$calle,$nivel) {
        require_once ('db.php');
        $sql1="insert into usuario (nombre,apellido_paterno,apellido_materno,telefono,calle,nivel) values ('$nombre','$apellidop','$apellidom','$telefono','$calle',$nivel)";
        $query=mysql_query($sql1);
        echo"usuario dado de alta correctamente";



    }


    public function read_usuariog () {

      $sql1 = "select * from usuario order by id asc";
      $result1 = mysql_query($sql1) or die (mysql_error());
        echo"<div class='table table-responsive' style='margin:20px; overflow:scroll'>";
        echo"<table class='table table-striped   '>";
        echo"<tr><td colspan=17>Consulta General</tr>";
        echo"<tr><td>Id</td></td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Calle</td><td>Numero</td><td>Colonia</td><td>Municipio</td><td>Estado</td>";
        echo"<td>Cp</td><td>Correo</td><td>Usuario</td><td>Contrasena</td><td>Nivel</td><td>estatus</td></tr>";
      while ($field =  mysql_fetch_array($result1))
      {
          $this->id = $field['id'];
          $this->nombre = $field['nombre'];
          $this->apellido_Paterno = $field['apellido_paterno'];
          $this->apellido_Materno = $field['apellido_materno'];
          $this->telefono = $field['telefono'];
          $this->calle = $field['calle'];
          $this->telefono = $field['telefono'];
          $this->numero_exterior = $field['numero_exterior'];
          $this->colonia = $field['colonia'];
          $this->municipio = $field['municipio'];
          $this->estado = $field['estado'];
          $this->cp = $field['cp'];
          $this->correo = $field['correo'];
          $this->usuario = $field['usuario'];
          $this->contrasena = $field['contrasena'];
          $this->nivel = $field['nivel'];
          $this->estatus = $field['estatus'];

          echo "<tr><td>".$this->id;
          echo "</td><td>".$this->nombre;
          echo "</td><td>".$this->apellido_Paterno;
          echo "</td><td>".$this->apellido_Materno;
          echo "</td><td>".$this->telefono;
          echo "</td><td>".$this->calle;
          echo "</td><td>".$this->telefono;
          echo "</td><td>".$this->numero_exterior;
          echo "</td><td>".$this->colonia;
          echo "</td><td>".$this->municipio;
          echo "</td><td>".$this->estado;
          echo "</td><td>".$this->cp;
          echo "</td><td>".$this->correo;
          echo "</td><td>".$this->usuario;
          echo "</td><td>".$this->contrasena;
          echo "</td><td>".$this->nivel;
          echo "</td><td>".$this->estatus;





      }
        echo"</table></div>";

    }

    Public function read_usuarios ($id) {

        $sql1 = "select * from usuario where id=$id order by id asc";
        $result1 = mysql_query($sql1) or die (mysql_error());

        echo"<table class='table table-striped table-responsive'>";
        echo"<tr><td colspan=17>Consulta Especifica</tr>";
        echo"<tr><td>Id</td></td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Calle</td><td>Numero</td><td>Colonia</td><td>Municipio</td><td>Estado</td>";
         echo"<td>Cp</td><td>Correo</td><td>Usuario</td><td>Contrasena</td><td>Nivel</td><td>estatus</td></tr>";
        while ($field =  mysql_fetch_array($result1))
        {
            $this->id = $field['id'];
            $this->nombre = $field['nombre'];
            $this->apellido_Paterno = $field['apellido_paterno'];
            $this->apellido_Materno = $field['apellido_materno'];
            $this->telefono = $field['telefono'];
            $this->calle = $field['calle'];
            $this->telefono = $field['telefono'];
            $this->numero_exterior = $field['numero_exterior'];
            $this->colonia = $field['colonia'];
            $this->municipio = $field['municipio'];
            $this->estado = $field['estado'];
            $this->cp = $field['cp'];
            $this->correo = $field['correo'];
            $this->usuario = $field['usuario'];
            $this->contrasena = $field['contrasena'];
            $this->nivel = $field['nivel'];
            $this->estatus = $field['estatus'];

            echo "<tr><td>".$this->id;
            echo "</td><td>".$this->nombre;
            echo "</td><td>".$this->apellido_Paterno;
            echo "</td><td>".$this->apellido_Materno;
            echo "</td><td>".$this->telefono;
            echo "</td><td>".$this->calle;
            echo "</td><td>".$this->telefono;
            echo "</td><td>".$this->numero_exterior;
            echo "</td><td>".$this->colonia;
            echo "</td><td>".$this->municipio;
            echo "</td><td>".$this->estado;
            echo "</td><td>".$this->cp;
            echo "</td><td>".$this->correo;
            echo "</td><td>".$this->usuario;
            echo "</td><td>".$this->contrasena;
            echo "</td><td>".$this->nivel;
            echo "</td><td>".$this->estatus;






        }
echo"</table></div>";


    }


    Public function update_usuario ($nombre,$apellidop,$apellidom,$numero,$calle,$nivel,$id) {
        require_once ('db.php');
        $sql1="update usuario set nombre='$nombre',  apellido_paterno='$apellidop', apellido_materno='$apellidom', telefono='$numero', calle='$calle',nivel=$nivel where id=$id ";
        $query=mysql_query($sql1) or die (mysql_error());
        echo"<div class='alert alert-warning alert-dismissable'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>¡Cuidado!</strong>Usuario Dado de alta.
</div>";

    }


    Public function delete_usuario ($id) {

        require_once ('db.php');
        $sql1=" delete from usuario where id=$id ";
        $query=mysql_query($sql1) or die (mysql_error());
        echo"usuario eliminado correctamente";


    }








} 