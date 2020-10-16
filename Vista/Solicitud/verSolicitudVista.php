<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ver Orden de Servicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ver Orden de Servicio</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Orden de servicio</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Número de orden: <?= $datos['idSolicitud'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Técnico asignado: <?= $datos['fechaRegistro'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName">Precio total estimado: <?= $datos['otorgadoX'];?></label>
                </div>
                <hr>
                <!-- <div class="form-group">
                  <label for="inputName"><b>Nombres:</b> <?php echo $datos['aFavor'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName"><b>Apellidos:</b> <?php echo $datos['apellidos'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName"><b>DNI:</b> <?php echo $datos['numOrden'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName"><b>Dirección:</b> <?php echo $datos['direccion'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName"><b>Celular:</b> <?php echo $datos['celular'];?></label>
                </div>
                <div class="form-group">
                  <label for="inputName"><b>Email:</b> <?php echo $datos['email'];?></label>
                  <input type="text" name="email" class="form-control"> -->
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del producto</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form  action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Producto: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Marca: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Modelo: </label>
              </div>
              <div class="form-group">
                <label for="inputName">Número de serie: </label>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del problema: </label>
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripción del trabajo a realizar: </label>
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Precio estimado: </label>
              </div>
            </div>
            </form>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Atras</a>
        </div>
      </div>
    </section>
  </div>