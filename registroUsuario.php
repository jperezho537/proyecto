<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-8 border border-1 rounded-3 shadow-lg bg-light mt-5 p-3">
                <h2 class="text-center">Registro</h2>
                <form action="insertUsuario.php" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="email" name="email" id="email" placeholder="" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="rol">Rol</label>
                        <select class="form-select" id="rol" name="rol" required>
                            <option selected disabled>Escoge una opción</option>
                            <option value="Administrador">Administrador</option>
                            <option value="instructor">Instructor</option>
                            <option value="Estudiante">Estudiante</option>                          
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="" required>
                        <label for="password">Contraseña</label>
                    </div>
                    <button class="btn btn-success w-100 p-2" type="submit">Enviar</button>
                </form>
                <a href="index.php">¿Tienes cuenta? Inicia sesion</a>
                
                   <?php 
                    if (isset($_GET['var'])):                   
                   ?>
                    <div class="alert alert-info text-center mt-3" role="alert">
                        <?php echo $_GET['var']?>
                    </div>
                   <?php
                   endif;
                   ?>
                

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>