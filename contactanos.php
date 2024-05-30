<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Tienda Lokito Vergara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

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
                <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Realiza su pregunta o si tiene alguna duda?</h5>
                                    <p class="text-muted font-13 mb-4">Ingrese correctamente lo que se pide en el formulario, Gracias.</p>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-lg-6 mb-3 mb-lg-0">
                                                <input class="form-control" type="text" id="name" placeholder="Name">                                                       
                                            </div> 
                                            <div class="col-lg-6">
                                                <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                            </div>                                                   
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="Subject">                                                       
                                            </div>                                                    
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                        </div>                                                
                                        
                                        <button type="submit" class="btn btn-primary btn-block px-4">Enviar</button>
                                    </form>
                                </div>
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