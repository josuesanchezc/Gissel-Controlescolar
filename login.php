<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

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
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>

<body style="background-color:#39F; background-repeat:no-repeat; background-size:cover;">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		
	<?php
	require'validar.php';
	
	?>	
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:200px;">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Bienvenido</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Usuario" name="nom">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" name='submit'>Iniciar</button>
              <span class="pull-right"><a href="#"></a></span><span><a href="#"></a></span>
            </div>
          </form>
          
         
          
          
          
      </div>
      <div class="modal-footer">
       <div class='container' style="padding-left:120px;">
         <?php
		  
		  if (isset($_POST['submit'])){
		 $nom=$_POST['nom'];
		 $password=$_POST['password'];
		 $validar=new Validar();
		 $validar->accesos($nom,$password);
	}
		  
		  ?> 
          </div>
      </div> 
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
