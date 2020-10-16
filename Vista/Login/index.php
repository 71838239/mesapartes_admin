<nav class="mt-2">
</nav><!--
  </aside>--> 
<!-- sdfsdfdsfdsfdsdsdsfdsfdsfdsfdsfdsfdsfdsfdsfdsf -->
        <div id="page-container" class="main-content-boxed">
            <main id="main-container">
                <div class="bg-image" style="background-image: url('<?= URL; ?>Vista/template/public/assets/img/photos/fondo_1.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Dirección Regional de Archivo
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2020</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">Mesa de </span><span class="font-size-xl">Partes</span>
                                    </a>
                                    <h2 class="h5 font-w400 text-muted mb-0">Inicio de Sesion</h2>
                                </div>

                                <?php
                                    if (isset($_GET["m"])){
                                        switch($_GET["m"]){
                                            case "1";
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                                        <span> El Usuario y/o Contraseña son incorrectos. </span>
                                                    </div>
                                                </div>
                                            <?php
                                            break;

                                            case "2";
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                                        <span> Los campos estan vacios.</span>
                                                    </div>
                                                </div>
                                            <?php
                                            break;
                                        }
                                    }
                                ?>

                                <form action="" method="post" id="loginnum1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" name="DNI" class="form-control" placeholder="DNI">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 icheck-primary">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Recuerdame</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="enviar" class="form-control" value="si">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Iniciar Sesión 
                                        </button>
                                        <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="RecuperarContrasena/">
                                                <i class="fa fa-warning mr-5"></i> Olvide mi Contraseña
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <p class="mb-1 text-danger">
                                  <?php echo $datos;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div><!--
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bienvenido</h1>
          </div> /.col --><!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div> /.col --><!--
        </div> /.row -->
      </div><!-- /.container-fluid 
    </div>
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b> Mesa de Partes</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Inicio de sesión</p>

          <form method="post">
            <div class="input-group mb-3">
              <input type="text" name="DNI" class="form-control" placeholder="DNI">
            </div>
            <div class="input-group mb-3">
              <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña">
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Recordar credenciales
                  </label>
                </div>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
              </div>
            </div>
          </form>
          <p class="mb-1 text-danger">
            <?php echo $datos;?>
          </p>
          
        </div>
      </div>
    </div>-->
