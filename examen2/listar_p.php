<?php 
    include('poste.php');
    $poste = new Poste($conexion);
    $postes = $poste->listarUsuarios();
    $title = "Lista Postes";
    include 'header.php';
?>

<div class="container mt-5">
    <div class="card shadow-lg animated-card">
        <div class="card-header text-center animated-header">
            <h1 class="animated-title">Lista de Postes</h1>
        </div>
        <div class="card-body animated-body">
            <table class="table table-bordered table-hover animated-table">
                <thead class="thead-dark">
                    <tr>
                        <th>Numero de poste</th>
                        <th>fecha</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Referencia</th>
                        <th>Latitud</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($postes as $poste) { ?>
                    <tr class="animated-row">
                        <td><?php echo $poste['id']; ?></td>
                        <td><?php echo $poste['fecha']; ?></td>
                        <td><?php echo $poste['direccion']; ?></td>
                        <td><?php echo $poste['departamento']; ?></td>
                        <td><?php echo $poste['municipio']; ?></td>
                        <td><?php echo $poste['referencia']; ?></td>
                        <td><?php echo $poste['longitud']; ?></td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center animated-footer">
            <a href="agregar_p.php" class="btn btn-primary animated-add-btn">Agregar Poste</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
