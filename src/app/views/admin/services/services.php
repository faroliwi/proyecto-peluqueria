<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CORTE Y ESTILO - Tu peluqueria de confianza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>9:00 - 21:00 Lunes - Viernes</h2>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>976 25 64 74 Pide tu cita</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="../index.html" class="navbar-brand">Corte y Estilo</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php foreach ($services as $key => $service) { ?>
                <tr>
                    <td><?php echo $service->name ?></td>
                    <td><?php echo $service->gender ?></td>
                    <td><?php echo $service->details ?></td>
                    <td><?php echo $service->price ?></td>
                    <td><?php echo $service->time ?></td>
                    <td>
                        <!-- La "/" final se deja porque pasa por referencia el ID del servicio así = show/(id) -->
                        <a href="<?= "/services/show/" . $service->id ?>" class="btn btn-primary">Ver </a>
                        <a href="<?= "/services/edit/" . $service->id ?>" class="btn btn-primary">Editar </a>
                        <a href="<?= "/services/delete/" . $service->id ?>" class="btn btn-danger">Borrar </a>
                    </td>
                </tr>
            <?php } ?>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="../index.html" class="nav-item nav-link active">Home</a>
                    <a href="html/about.html" class="nav-item nav-link">Nosotros</a>
                    <a href="html/service.html" class="nav-item nav-link">Servicios</a>
                    <a href="html/price.html" class="nav-item nav-link">Trabajadores</a>
                    <a href="html/class.html" class="nav-item nav-link">Acceso administrador</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Servicios</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Servicios</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>¿Qué hacemos?</p>
                <h2>Nuestros servicios</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout"></i>
                        </div>
                        <h3>Heal emotions</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item active">
                        <div class="service-icon">
                            <i class="flaticon-workout-1"></i>
                        </div>
                        <h3>Body Refreshes</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-2"></i>
                        </div>
                        <h3>Mind & Serenity</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-3"></i>
                        </div>
                        <h3>Enjoy Your life</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-workout-4"></i>
                        </div>
                        <h3>Body & Spirituality</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-yoga-pose"></i>
                        </div>
                        <h3>Body & Mind</h3>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <a href="index.html" class="footer-logo">Y<span>oo</span>ga</a>
                    <h3>123 Street, New York, USA</h3>
                    <div class="footer-menu">
                        <p>+012 345 67890</p>
                        <p>info@example.com</p>
                    </div>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>