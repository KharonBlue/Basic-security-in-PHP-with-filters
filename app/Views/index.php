<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="<?=base_url()?>/assets/style/style_index.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="<?=base_url().route_to('exit')?>"><img src="<?=base_url()?>/assets/salir.svg" alt="Logo de la marca"></a>
        </div>
        <nav>
           <ul class="nav-links">
           <li><a class="btn" href=""><button><?php echo session('user') ?></button></a></li>
           <li><a href="">Servicios</a></li>
           <li><a href="">About</a></li>
           <li><a href="">Contact</a></li>
           </ul>            
        </nav>
    </header>
    <article>
        <h1><?php echo $message?></h1>
    </article>
</body>
</html>