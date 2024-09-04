<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendas de Vestir</title>
    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/fondo_usuario.css">
    <link rel="stylesheet" href="../css/prenda_vestir.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="usuario.php">ROMWE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Centro de Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articulos.php">Prendas de vestir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cliente.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Foro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reporte.php"> Generar Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/c_session.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container is-fluid">
        <h1>Prendas de Vestir</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="../images/pr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $12</p>
                <p class="descripcion">Descripción: Top de tul con cordones y bloques de color con tirantes finos grunge punk</p>
                <button class="btn btn-primary agregar-carrito" data-precio="12">Agregar al Carrito</button>
            </div>
            <div class="col-md-4">
                <img src="../images/prr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $13</p>
                <p class="descripcion">Descripción: Camiseta con estampado de calavera y letras para hombre Grunge Punk</p>
                <button class="btn btn-primary agregar-carrito" data-precio="13">Agregar al Carrito</button>
            </div>
            <div class="col-md-4">
                <img src="../images/prrr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $21</p>
                <p class="descripcion">Descripción: Vestido sin tirantes sintético sexy grunge punk con cremallera y cinturón para mujer</p>
                <button class="btn btn-primary agregar-carrito" data-precio="21">Agregar al Carrito</button>
            </div>
            <div class="col-md-4">
                <img src="../images/prrrr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $10</p>
                <p class="descripcion">Descripción: Grunge Punk 8 piezas estilo punk estrella zapato encantos decoración</p>
                <button class="btn btn-primary agregar-carrito" data-precio="10">Agregar al Carrito</button>
            </div>
            <div class="col-md-4">
                <img src="../images/prrrrr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $13</p>
                <p class="descripcion">Descripción: Falda asimétrica unicolor plisada grunge punk</p>
                <button class="btn btn-primary agregar-carrito" data-precio="13">Agregar al Carrito</button>
            </div>
            <div class="col-md-4">
                <img src="../images/prrrrrr.png" alt="Prenda 3" class="img-fluid">
                <p class="precio">Precio: $10</p>
                <p class="descripcion">Descripción: Grunge Punk 2 piezas pasadores de pelo decorativos personalizados estilo punk con letras</p>
                <button class="btn btn-primary agregar-carrito" data-precio="10">Agregar al Carrito</button>
            </div>
            
        </div>
        <div class="total-carrito">
        <h2>Total:</h2>
        <p id="total">0</p>
        <button class="btn btn-success" id="ver-carrito">Ver Carrito</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var total = 0;

        $('.agregar-carrito').click(function() {
            var precio = $(this).data('precio');
            total += precio;
            $('#total').text(total);
        });

        $('#ver-carrito').click(function() {
            window.location.href = 'carrito.php?total=' + total;
        });
    </script>
</body>
</html>

