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
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css"/>

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

                            <div class="row">
                                <div class="col-6">
                                    <img src="https://th.bing.com/th/id/OIP.J6IGZBLZJDhIYkdXkRhypgHaFj?rs=1&pid=ImgDetMain"
                                         alt="asd" width="100%">
                                </div>
                                <div class="col-6">
                                    <p>
                                    <h2 class="text-center">Sobre Nosotros</h2>
                                    <p class="text-justify large-text">
                                        Bienvenidos a nuestra tienda virtual. Somos una empresa comprometida con ofrecer
                                        una experiencia de
                                        compra en línea excepcional.
                                        Contamos con un catálogo extenso de productos de alta calidad que cubren todas
                                        sus necesidades.
                                    </p>
                                    <p class="text-justify large-text">
                                        Nuestro objetivo es proporcionar a nuestros clientes una plataforma segura y
                                        fácil de usar, donde
                                        puedan encontrar todo lo que buscan al mejor precio.
                                        Nos esforzamos por mantenernos actualizados con las últimas tendencias y
                                        asegurar la disponibilidad
                                        de los productos más demandados.
                                    </p>
                                    <p class="text-justify large-text">
                                        Valoramos la satisfacción de nuestros clientes y nos dedicamos a ofrecer un
                                        servicio al cliente
                                        excepcional.
                                        Gracias por elegirnos como su tienda virtual de confianza. Esperamos poder
                                        servirles y superar sus
                                        expectativas en cada compra.
                                    </p>
                                    </p>
                                </div>


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- start page title -->

                <div class="container-fluid row">

                    <?php
                    for ($i = 0; $i <= 4; $i++) {
                        ?>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <div class="card">
                                <img class="card-img-top img-fluid"
                                     src="https://th.bing.com/th/id/OIP.J6IGZBLZJDhIYkdXkRhypgHaFj?rs=1&pid=ImgDetMain"
                                     alt="">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text">
                                        asdasd
                                    </p>
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
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/waves.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

<!-- App js -->
<script src="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>