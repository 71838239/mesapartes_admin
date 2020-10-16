<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar solicitud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar solicitud</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos del producto</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- <form  action="" method="POST" onsubmit="alert('Warning: datos actualizados del Producto!')"> -->
            <form  action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Estado actual: <?= $datos['TipoEstado'];?></label>
                <select name="Estados_idEstado" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione estado</option>
                  <?php if ($datos['Estados_idEstado'] == "PROCBUSQ") {?>
                  <option value="PROCCANC">Busqueda cancelada</option>
                  <option value="ESPPAGO">Esperando pago</option>
                  <?php } elseif ($datos['Estados_idEstado'] == "ESPPAGO") {?>
                  <option value="PROCEMIS">En proceso de emisión</option>
                  <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label>Agregar información</label>
                <textarea name="comentarios" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="btnAgregarProducto" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Info</h3>
              
            </div>
            
            <div class="card-body">
              <div class="form-group">
                <label for="inputName"></label>
                
              </div>
              
            </div>
            
          </div>
        </div>

      </div>
    </section>
  </div>