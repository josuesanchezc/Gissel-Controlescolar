<?php
?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="js2/jquery-1.4.2.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <ul class="nav navbar-nav">
                    
                    <li><a href="">Materias</a></li>
                    <li><a href="cerrar.php">Cerrar</a></li>
                    
                </ul>
                </li>
                
            </div><!--/.nav-collapse -->
        </div>
    </div>
</head>

    
  </body>
  <?php
  $id=$_GET['id'];
  require 'db.php';
  echo" <table class='table table-striped'	><tr><td>Materia</td><td>eliminar</td></tr>";	
$table=mysql_query("SELECT ma.idmm ,m.nombre FROM maestro_ma AS ma , materia AS m WHERE m.idm=ma.idm AND id=$id	");
while ($field =  mysql_fetch_array($table))
      {	
           $nmat= $field['nombre'];
		    $idmm= $field['idmm'];
		   echo"<tr><td>$nmat</td><td><a href='eliminar.php?idmm=$idmm'>eliminar</a></td></tr>";
}
	
	echo"</table>";
  ?>
</html>
<?php
    require ('footer.php');
?>