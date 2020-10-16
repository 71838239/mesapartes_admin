<?php include_once "./Vista/body.php";?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Solicitudes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Solicitudes</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Seguimiento de solicitudes</h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nro.</th>
            <th>Otorgado X</th>
            <th>A Favor</th>
            <th>Solicitante</th>
            <th>Estado</th>
            <th>Fecha de registro</th>
            <th>Acción</th>
          </tr>
          </thead>
          <tbody>
          <?php while (@$row = mysqli_fetch_array($datos)) {?>
          <tr>
            <td><?= @$row['idSolicitud'];?></td>
            <td><?= @$row['otorgadoX'];?></td>
            <td><?= @$row['aFavor'];?></td>
            <td><?= @$row['Solicitantes_DNI'];?></td>
            <td><span class="badge badge-success"><?= @$row['TipoEstado'];?></span></td>
            <td><?= @$row['fechaRegistro'];?></td>
            <td>
              <div class="btn-group">
                 <a class="btn btn-info" href="<?= URL; ?>Solicitud/verSolicitudVista/<?= $row['idSolicitud'];?>">Ver</a>
                 <a class="btn btn-warning <?php if ($row['Estados_idEstado']=='PROCBUSQ') echo ""; else echo "disabled";?>" href="<?= URL; ?>Solicitud/editarSolicitudVista/<?= $row['idSolicitud'];?>">Editar</a>
                 <!-- <a class="btn btn-danger <?php if ($row['Estado']=='Terminado') echo "disabled"; else echo "";?>" href="<?php echo URL; ?>Producto/eliminarProductoVista/<?php echo $row['idProducto'];?>">Eliminar</a> -->
                 <!-- <a class="btn btn-info" href="#">Ver</a>
                 <a class="btn btn-warning" href="#">Editar</a>
                 <a class="btn btn-danger" href="#">Eliminar</a> -->
              </div> 
            </td>
          </tr>
          <?php }?>
          </tbody>
          
        </table>
      </div>
    </div>
</div>