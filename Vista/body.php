<header class="logo-env">
			
	<!-- logo -->
	<div class="logo">
		<a href="main.php">
			<img src="../../img/logo.png" alt="" width="192" height="80" />
		</a>
	</div>
		<!-- logo collapse icon -->
	<div class="sidebar-collapse">
  	<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
			<i class="entypo-menu"></i>
		</a>
	</div>
	<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
	<div class="sidebar-mobile-menu visible-xs">
	  <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
			<i class="entypo-menu"></i>
		</a>
	</div>
</header>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
    	<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>  
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="#" class="brand-link">
	  <img src="<?php echo URL; ?>Vista/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin Mesa de Partes</span>
	</a>
  <div class="user-panel">
    <div class="row">
      <a href="#" class="nav-link text-gray"><i class="fas fa-user fa-sm fa-fw mr-2"></i><span> <?php echo $_SESSION['usuario'];?> </span></a>
      <a href="<?= URL; ?>Login/logout" onclick="return confirm('¿Seguro que desea cerrar sesión?')" class="nav-link text-gray"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i><span >Cerrar Sesión</span></a>
    </div>
  </div>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Solicitudes<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= URL; ?>Solicitud" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Seguimiento</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</aside>