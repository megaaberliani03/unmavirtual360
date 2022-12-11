<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>UNMA 360</title>
	<!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <!-- Datatable -->
    <link href="tabelgan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="tabelgan/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="tabelgan/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    UNMA 360
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">UNMA 360</h2>


		<div class="data">
			<?php
			include "data.php";
			?>
		</div>
		
    </div>

    <div class="text-center">© 2021 Copyright:
	    <a href="https://unma.ac.id/"> Informatika UNMA</a>
	</div>

	<script src="tabelgan/js/jquery.min.js"></script>
	<script src="tabelgan/vendor/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="tabelgan/js/sb-admin-2.min.js"></script>
	<script src="tabelgan/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="tabelgan/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="tabelgan/js/datatables-demo.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	
</body>
</html>