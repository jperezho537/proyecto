<!DOCTYPE html>
<html>

<head>
    <title>Escuela rural semillas del futuro</title>
</head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="dibujo.png" id="icon" alt="USUARIO" />
            </div>
            <h3>Bienvenidos a la escuela rural semillas del futuro</h3>
            <h4>Iniciar sesion</h4>
            <form action = "validarLogin.php" method="POST">
                <label>Email:</label><br>
                <input class="fadeIn second type=" text name="email"><br>
                <label>Contraseña:</label><br>
                <input class="fadeIn third" type="password" name="password"><br><br>
                <input class="fadeIn fourth" type="submit" value="Iniciar sesión">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="registroUsuario.php">¿No tienes cuenta? Registrate</a>
            </div>

        </div>
    </div>
</body>

</html>