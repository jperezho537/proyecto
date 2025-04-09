<?php include 'config/conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Gestión De Recursos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<!--Barra de navegacion lateral-->

<div class="sidebar" id="sidebar">
        <button class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="sidebar-header">
            <h3>SisGestRec</h3>
            
            <div class="user-info">
                <div class="user-avatar">A</div>
                <div class="user-info-details">
                    <span>Administrador</span>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="logout.php">Cerrar sesion</a></li>
                </ul>
            </nav>
        </div>
            <div class="menu-item">
                <i class="fas fa-building"></i>
                <span class="menu-text">Infraestructura</span>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">

            <h2>Gestión de recursos</h2>
            <p>Por favor diligenciar la siguiente bitácora para disponer de los recursos físicos de la institución.</p>

            <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignación de Aulas</title>
</head>
<body>
    <h2>Asignar Aula</h2>
    <form action="guardar.php" method="POST">
        <label>Aula:</label>
        <select name="aula" required>
            <option value="Auditorio">Auditorio</option>
            <option value="Laboratorio">Laboratorio</option>
            <option value="Informática">Informática</option>
            <option value="Ofimática">Ofimática</option>
            <option value="Gimnasio">Gimnasio</option>
        </select><br><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Disponible">Disponible</option>
            <option value="Ocupado">Ocupado</option>
            <option value="Reservado">Reservado</option>
            <option value="Mantenimiento">Mantenimiento</option>
        </select><br><br>

        <label>Fecha:</label>
        <input type="date" name="fecha" required><br><br>

        <label>Hora:</label>
        <input type="time" name="hora" required><br><br>

        <label>Observaciones:</label><br>
        <textarea name="observaciones" rows="4" cols="30"></textarea><br><br>

        <button type="submit">Guardar</button>
    </form>

    <div class="container mt-4">
    <h2 class="mb-4">Listado de Aulas Asignadas</h2>

    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Aula</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conexion->query("SELECT * FROM aulas");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['aula']}</td>
                                <td>{$row['estado']}</td>
                                <td>{$row['fecha']}</td>
                                <td>{$row['hora']}</td>
                                <td>{$row['observaciones']}</td>
                                <td>
                                    <a href='editar.php?id={$row['id']}' class='btn btn-sm btn-warning'>Editar</a>
                                    <a href='eliminar.php?id={$row['id']}' class='btn btn-sm btn-danger'>Eliminar</a>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
    

    
</body>
</html>