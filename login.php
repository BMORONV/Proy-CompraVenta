<?php
    require_once("config/conexion.php");

    if (isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>Infosuit | Acceso </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>

    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    <div class="bg-overlay"></div>
                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mt-auto">
                                            <div class="mb-3">
                                                <i class="ri-double-quotes-l display-4 text-success"></i>
                                            </div>

                                            <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner text-center text-white-50 pb-5">
                                                    <div class="carousel-item active">
                                                        <p class="fs-10 fst-italic">" Conecta, Compra, Vende: ¡Bienvenido a tu tienda digital! "</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-10 fst-italic">" Tu espacio de compras y ventas, donde cada oportunidad es posible."</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-10 fst-italic">" Compra lo que necesitas, vende lo que sobra. ¡Haz crecer tu negocio con nosotros! "</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <h5 class="text-primary">Bienvenido !</h5>
                                        <p class="text-muted">Acceder a Infosuit</p>
                                    </div>

                                    <div class="mt-4">
                                        <form action="" method="post" id="login_form">

                                            <div class="mb-3">
                                                <label for="usu_correo" class="form-label">Correo Electrónico</label>
                                                <input type="text" class="form-control" name="usu_correo" id="usu_correo" placeholder="Ingrese Correo Electrónico">
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="auth-pass-reset-cover.html" class="text-muted">¿Olvidó su contraseña?</a>
                                                </div>
                                                <label class="form-label" for="usu_pass">Contraseña</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5" placeholder="Ingrese Contraseña" name="usu_pass" id="usu_pass">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon">
                                                        <i class="ri-eye-fill align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Recuérdame</label>
                                            </div>

                                            <div class="mt-4">
                                                <input type="hidden" name="enviar" value="si">
                                                <button class="btn btn-success w-100" type="submit">Acceder</button>
                                            </div>

                                            <!-- BLOQUE AÑADIDO -->
                                            <?php
                                                if (isset($_GET['error']) && $_GET['error'] == '1') {
                                                    echo '<div class="alert alert-danger mt-3">Correo o contraseña incorrectos.</div>';
                                                }
                                            ?>
                                            <!-- FIN BLOQUE AÑADIDO -->

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- row -->
                    </div> <!-- card -->
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script>  
                            <i class="mdi mdi-heart text-danger"></i> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/pages/password-addon.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="login.js"></script>

</body>
</html>
