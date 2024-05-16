
<?php include ('Controller/Controller_editar_producto_niño.php')?>
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
    <?php require_once('include/menu.php'); ?>

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
                                <h4 class="card-title">Custom styles</h4>

                                <form class="needs-validation" method="post">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Titulo</label>
                                            <input type="text" name="titulo_producto" class="form-control"
                                                   id="validationCustom01"
                                                   value="<?php echo $imprimirUsuario['titulo'] ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Descripcion</label>
                                            <input type="text" name="descripcion_producto" class="form-control"
                                                   id="validationCustom02"
                                                   placeholder="Describelo"
                                                   value="<?php echo $imprimirUsuario['decripcion'] ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Precio</label>
                                            <input type="number" name="precio_producto" class="form-control"
                                                   id="validationCustom02"
                                                   placeholder="S/10.00"
                                                   value="<?php echo $imprimirUsuario['precio'] ?>">
                                            <div class="valid-feedback">
                                                Looks good!

                                            </div>
                                        </div>

                                        <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                name="editar_producto">Editar
                                        </button>
                                        <a href="niños.php" class="btn btn-secondary waves-effect waves-light ml-2">Volver</a>

                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- start page title -->
                <div class="container-fluid row">


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