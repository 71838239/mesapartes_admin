<?php namespace Vista;
ob_start();
session_start();
$template = new Template();

class Template{
	public function __construct(){
?>
<!DOCTYPE html>	
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Admin - Mesa de Partes</title>
		<link rel="stylesheet" href="<?= URL; ?>Vista/template/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= URL; ?>Vista/template/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="<?= URL; ?>Vista/template/dist/css/adminlte.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<!--ayuda styke-->
		<link rel="icon" type="image/x-icon" href="<?= URL; ?>Vista/template/public/assets/img/favicons/favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= URL; ?>Vista/template/public/assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= URL; ?>Vista/template/public/assets/img/favicons/apple-touch-icon-180x180.png">
		<link rel="stylesheet" id="css-main" href="<?= URL; ?>Vista/template/public/assets/css/codebase.min.css">
		
	</head>	
	<body class="hold-transition sidebar-mini">
	<div class="wrapper m-0">
	<!--<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
	      <li class="nav-item">
	      	<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
	      </li>  
	    </ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<a href="#" class="brand-link">
		  <img src="<?php echo URL; ?>Vista/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		       style="opacity: .8">
		  <span class="brand-text font-weight-light">Admin Mesa de Partes</span>
		</a>-->
<?php 
		}
		public function __destruct(){
?>
	</div>
	<script src="<?= URL; ?>Vista/template/plugins/jquery/jquery.min.js"></script>
	<script src="<?= URL; ?>Vista/template/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="<?= URL; ?>Vista/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= URL; ?>Vista/template/dist/js/adminlte.min.js"></script>
	<script src="<?= URL; ?>Vista/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= URL; ?>Vista/template/plugins/datatables/jquery.dataTables.js"></script>
	<script src="<?= URL; ?>Vista/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<script src="<?= URL; ?>Vista/template/dist/js/adminlte.min.js"></script>
	<script src="<?= URL; ?>Vista/template/dist/js/demo.js"></script>
	<script>
	  $(function () {
	    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false,
	    });
	    
	   });
	</script>
	<!--AYUDA-->
	
	<script src="<?= URL; ?>Vista/template/public/assets/js/core/jquery.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/popper.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/jquery.appear.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/jquery.countTo.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/core/js.cookie.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/codebase.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= URL; ?>Vista/template/public/assets/js/pages/op_auth_signin.js"></script>
	</body>
	</html>			
<?php
		}
	}
?>