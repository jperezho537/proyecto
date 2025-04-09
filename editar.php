<?php
include 'config/conexion.php';

$id = $_GET['id'];
$result = $conexion->query("SELECT * FROM aulas WHERE id = $id");
$registro = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Editar Asignación</h4>
        </div>
        <div class="card-body">
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= $registro['id'] ?>">

                <div class="mb-3">
                    <label for="aula" class="form-label">Aula</label>
                    <select name="aula" id="aula" class="form-select" required>
                        <?php
                        $aulas = ["Auditorio", "Laboratorio", "Informática", "Ofimática", "Gimnasio"];
                        foreach ($aulas as $a) {
                            $selected = $registro['aula'] == $a ? 'selected' : '';
                            echo "<option value='$a' $selected>$a</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select name="estado" id="estado" class="form-select" required>
                        <?php
                        $estados = ["Disponible", "Ocupado", "Reservado", "Mantenimiento"];
                        foreach ($estados as $e) {
                            $selected = $registro['estado'] == $e ? 'selected' : '';
                            echo "<option value='$e' $selected>$e</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="<?= $registro['fecha'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" name="hora" id="hora" class="form-control" value="<?= $registro['hora'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" class="form-control" rows="4"><?= $registro['observaciones'] ?></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
