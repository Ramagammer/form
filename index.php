
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=EB+Garamond&display=swap" rel="stylesheet">
</head>
<body>
    <div class="principal">
        <div class="box-1">
            <h1>¡Ingrese sus datos!</h1>
        </div>
        <div class="box-2">
            <form method="POST">
                <div class="separate">
                <div class="input-container-0">       
                    <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre completo:">    
                </div>              
                <div class="input-container-1">  
                    <input type="tel" id="telefono" name="telefono" required placeholder="Ingrese su telefono:">
                </div>
                <div class="input-container-2">            
                    <input type="email" id="email" name="email" required placeholder="Ingrese su email:">
                </div>
                </div>
                <button type="submit" name="register">Enviar</button>

            </form>
        </div>
        <div class="box-3"></div>
            <div class="logo-text-0">Developed by:</div>
            <div id="logo-text-1" class="logo-text-1">Ramiro Hernandez</div>
        </div>    
    </div>
    <script src="funciones.js"></script>
    <?php
    include("registrar.php");
    ?>
</body>
</html>
