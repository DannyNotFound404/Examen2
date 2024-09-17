<?php
  $title = "Agregar Poste";
  include 'header.php';
?>
<div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h2 class="text-center mb-4">Agregar Poste de alumbrado</h2>
            <form action="procesarP.php" method="post">

                
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                </div>
                
                <div class="mb-4">
                    <label for="departamento" class="form-label">Departamento</label>
                    <input type="text" name="departamento" id="departamento" class="form-control">
                <div class="mb-3">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" name="municipio" id="municipio" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input type="text" name="referencia" id="referencia" class="form-control">
                </div>
                
                <div class="mb-4">
                    <label for="longitud" class="form-label">Latitud Y Longitud</label>
                    <input type="longitud" name="longitud" id="longitud" class="form-control">
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="listar_p.php" class="btn btn-secondary">Volver a la Lista de Postes</a>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>
