<?php require_once('Model/conextion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title> Tienda Lokito Vergara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="MyraStudio" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">
    <div class="header-border"></div>
    <?php require_once('include/menu.php') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">With Indicators</h4>
                                <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside
                                    the controls, too.</p>

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid"
                                                 src="https://th.bing.com/th/id/R.e026348840a3f16811d446e3ab82a19f?rik=RQc6zgUSMKT30w&riu=http%3a%2f%2fbebesalud.net%2fwp-content%2fuploads%2fmoda-infantil-online.jpg&ehk=PR9uMn4fYl1IZ0Cupej08LEOZtsTkqdmYDu7oJg9vXg%3d&risl=&pid=ImgRaw&r=0"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                 src="https://comoorganizarlacasa.com/wp-content/uploads/2019/10/moda-para-ninos-y-bebes.jpg"
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                 src="https://th.bing.com/th/id/R.053ceedb24b1ae0eea6b60ed25bf4338?rik=xycTcd1FSNspPA&pid=ImgRaw&r=0"
                                                 alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- start page title -->
                <a href="registro_producto_niño.php" class="btn btn-secondary waves-effect waves-light mb-4">Ingresar
                    Nuevo Producto</a>
                <div class="container-fluid row">

                    <?php
                    $sql = "SELECT * FROM db_niño";
                    $mostrar = mysqli_query($conn, $sql);

                    for ($i = 0; $i < mysqli_num_rows($mostrar); $i++) {
                        $imprimir_datos = mysqli_fetch_assoc($mostrar)
                        ?>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <div class="card">
                                <img class="card-img-top img-fluid"
                                     src="https://th.bing.com/th/id/OIP.J6IGZBLZJDhIYkdXkRhypgHaFj?rs=1&pid=ImgDetMain"
                                     alt="">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $imprimir_datos['titulo'] ?></h5>
                                    <p class="card-text">
                                        <?php echo $imprimir_datos['decripcion'] ?>
                                    </p>
                                    <a href=""
                                       class="btn btn-secondary "> <?php echo "S/" . $imprimir_datos['precio'] ?>
                                    </a>
                                    <a href="editar_producto_niño.php?id_producto=<?php echo $imprimir_datos['id'] ?>"
                                       class="btn btn-secondary ">editar
                                    </a>
                                    <a href=""
                                       class="btn btn-secondary ">eliminar
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?php require_once('include/footer.php') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>


<!-- jQuery  -->
<script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
<script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
<script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

<!-- App js -->
<script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>