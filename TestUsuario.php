<?php
require('header.php');
require('db.php');
require ('Usuario.php');
require('header.php');

echo'';
$Usuario= new Usuario();

	if (isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta";
            echo"boton:".$_POST['submit'];
            $Usuario->create_usuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]","$_POST[numero]","$_POST[calle]",$_POST['nivel']);
            break;
        case "Modificar";
            echo"boton:".$_POST['submit'];
            $Usuario->update_usuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]","$_POST[numero]","$_POST[calle]","$_POST[nivel]","$_POST[id]");
            break;
        case "Eliminar";
            echo"boton:".$_POST['submit'];
            $Usuario->delete_usuario("$_POST[id]");
            break;
    }
	}


echo"<div class='container'>
    <form name='alumno' action='TestUsuario.php' method='POST'>
    <table class='table-responsive table-bordered'>
    <tr><td>Nombre</td><td><input type='text' name='nombre'></td></tr>
    <tr><td>Apellido Paterno</td><td><input type='text' name='apellidop'></td></tr>
    <tr><td>Apellido Materno</td><td><input type='text' name='apellidom'></td></tr>
    <tr><td>Telefono</td><td><input type='text' name='numero'></td></tr>
    <tr><td>Calle</td><td><input type='text' name='calle'></td></tr>
    <tr><td>Nivel</td><td><select name='nivel'>
    <option value=1>Estudiante</option>
    <option value=2>Maestro</option>
    <option value=3>Administrador</option>
    </select></td></tr>
     <tr><td colspan=1><input type='submit' name='submit' value='Alta'></td>
    <td colspan=1><input type='submit' name='submit' value='Modificar'></td></tr>
    <tr><td>Id</td><td><input type='text' name='id'></td></tr>
    <tr><td colspan=2><input type='submit' name='submit' value='Eliminar'></td></tr></div>
    </form></table>";
$Usuario->read_usuariog();



echo"</div>";
require ('footer.php');

?>