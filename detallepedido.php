<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Flora</title>

    
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- ARCHIVOS EXTERNOS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito|Karla|Balsamiq+Sans">
</head>
<body>
    
    <header class="header">
        <img class="header__img" src="images/flower_logo.png" alt="">
        <h1 class="header__h1">La Flora</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light mb-4 p4 bg-green">
        <div class="container-fluid ml-5">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse font-weight-bold" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-purple" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-purple" href="consulta.html">Consultar pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid">
        
        <!-- PRODUCTOS -->
        <section id="pedidos">

            <div class="row">
                <div class="col-6 d-flex flex-column justify-content-between">

                    <div>
                        <h3>Número de Pedido:</h3>
                    </div>
                    <div>
                        <h4 id="numero"><?php echo $_GET["numero"]; ?></h4>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div>
                        <h3>Estatus:</h3>
                    </div>
                    <div>
                        <h4 id="estado"> </h4>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-sm-12 mt-2 pt-3 bg-pink-light" >
                    <h3>Productos:</h3>
                    <div class="card-body">
                        <img id="imagen" class="card-img-top w-50 p-1" src="" alt="">
                        <div>
                            <h3 class="card-title" id="producto"> </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 mt-2">
                    <h3 class="mb-3">Cantidad:</h3>
                    <h4 id="cantidad"> </h4>
                </div>

                <div class="col-md-3 col-sm-12 mt-2">
                    <h3 class="mb-3">Precio:</h3>
                    <h4 id="precio"> </h4>
                </div>
            </div>

            <div class="row justify-content-end mb-5 bg-pink-light">
                <div class="col-md-3 col-sm-4 col-xs-4">
                    <h3 class="mb-3 ">Total:</h3>
                    <h4 id="total"> </h4>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-3 py-2 d-flex flex-column justify-content-between bg-pink-light">
                    <h3 class="mb-3">Fecha de entrega:</h3>
                    <h4 id="fecha"> </h4>
                </div>
                <div class="col-md-3 py-2 d-flex flex-column justify-content-between">
                    <h3 class="mb-3">Horario:</h3>
                    <h4 id="horario"> </h4>
                </div>
                <div class="col-md-3 py-2 d-flex flex-column justify-content-between bg-pink-light">
                    <h3 class="mb-3">Dirección:</h3>
                    <h4 id="direccion"></h4>
                </div>
                <div class="col-md-3 py-2 d-flex flex-column justify-content-between">
                    <h3 class="mb-3">Nombre de quien recibe:</h3>
                    <h4 id="receptor"> </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-wrap py-2 d-flex flex-column justify-content-between bg-pink-light">
                    <h3>Mensaje Personalizado:</h3>
                    <h4 class="text-break" id="mensaje"> </h4>
                </div>
            </div>
            
        </section>
    </main>

    <footer class="container-fluid mt-3 bg-pink-light pt-3">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3">
                <div class="row ml-3">
                    <h3 class="text-purple"> <i class="fab fa-whatsapp"></i> Whatsapp</h3>
                    <h4 class="text-red pl-3">5525252525</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <div class="row">
                    <div class="col-4 text-center text-purple">
                        <h3 class="icono">
                            <i class="fas fa-money-check-alt"></i>
                        </h3>
                        <h4>Tarjeta</h4>
                    </div>
                    <div class="col-4 text-center text-purple">
                        <h3 class="icono">
                            <i class="fab fa-paypal"></i>
                        </h3>
                        <h4>PayPal</h4>
                    </div>
                    <div class="col-4 pr-0 text-center text-purple">
                        <h3 class="icono">
                            <i class="fas fa-money-bill-wave"></i>
                        </h3>
                        <h4>Efectivo</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 pr-0 ">
                <div class="row ml-3 mb-3">
                    <h3 class="text-purple"> <i class="fab fa-facebook-square"></i> Facebook</h3>
                    <h4 class="text-red pl-3">@facebook</h4>
                </div>
                <div class="row ml-3">
                    <h3 class="text-purple"> <i class="fab fa-instagram-square"></i> Instagram</h3>
                    <h4 class="text-red pl-3">@instagram</h4>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/pedido.js"></script>
</body>
</html>