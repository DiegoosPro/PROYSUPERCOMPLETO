<?php
include_once "../funciones/funcionesproductos.php";
$datos = getAllProductos();

?>


<?php
include_once "head.php";
?>
<h3>ESTOY EN EL CRUD</h3>
<a href="pronuevo.php" class="btn btn-primary">Nuevo producto</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descripción</th>
      <th scope="col">P. Costo</th>
      <th scope="col">Marca</th>
      <th scope="col">Categoria</th>
      <th scope="col">Azúcar</th>
      <th scope="col">IVA</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($datos != null) {
      foreach ($datos as $indice => $row) {
    ?>
        <tr>
          <th scope="row"><?php echo $row['pro_id']; ?></th>
          <td><?php echo $row['pro_descripcion']; ?></td>
          <td><?php echo $row['pro_precio_c']; ?></td>
          <td><?php echo $row['marca_descripcion']; ?></td>
          <td><?php echo $row['catego_descripcion']; ?></td>
          <td><?php
              switch ($row['pro_nivel_azucar']) {
                case 'M':
                  echo "Medio";
                  break;
                case 'B':
                  echo "Bajo";
                  break;
                case 'A':
                  echo "Alto";
                  break;
                case 'N':
                  echo "Ninguno";
                  break;
              }

              ?>

          </td>
          <td><?php
              if ($row['pro_aplica_iva'] == 1)
                echo "Si";
              else
                echo "No";
              ?>
          </td>
          <td>
            <img src="../imagenes/<?php echo $row['pro_imagen']; ?>" width="60" height="60">
          </td>
          <td>
            <a href="#" class="btn btn-sm btn-info">Ver</a>
            <a href="#" class="btn btn-sm btn-warning">Editar</a>
            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
          </td>
        </tr>
    <?php
      } //foreach
    } //if
    ?>
  </tbody>
</table>


<?php
include_once "footer.php";
?>