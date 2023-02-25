<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmacia|Home</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/png" href="<?=url?>vistas/modulos/dist/img/favicon.ico"/>
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home <?php echo $res = ($user->getRol())==1 ? 'Administrador':'Técnico';  ?></li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>
    
</body>
</html>