<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>/assets/style/style_login.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="login-box">
        <form action="<?=base_url().route_to('login')?>" method="post">
            <h1>Iniciar sesión</h1>
            <div class="textbox">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Usuario" name="name" required>
            </div>
            <div class="textbox">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Contraseña" name="password" required>
            </div>
            <input class="btn" type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>