<?php include 'include/db.php;' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/minimal.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="img/New_Logo_Gris.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <title>Inicio de sesion | SistemEscolar</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4 mb 2">
            <div class="col"></div>
            <div class="col text-end">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaLogin" class="btn btnSlim">Ayuda
                    Login</a>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <h1 class="text-center display-5 fs-3 text">Inicio de <span class="TituloMiPrincesa">Sesion</span></h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-12 col-md-10 col-lg-10 text-center">
                <img src="img/New_Logo_Gris.png" alt="logo iscjlchavezG" style="width:250px;">
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col-sm-12 col-md- col-lg-6">
                <?php echo $alerta; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-10 text-center"></div>
            <div class="row mt-3 justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="needs-validation" novalidate>
                        <div class="row mt-2">
                            <input type="email" name="EmailUser" id="EmailUser" class="form-control" placeholder="Email"
                                required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu nombre de usuario.
                            </div>
                        </div>
                        <div class="row mt-2">
                            <input type="password" name="UserPass" id="VerPassWord" class="form-control"
                                placeholder="Password" required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu password.
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-6 col-md-6 col-lg-6"></div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-check form-switch">
                                    <input type="checkbox" id="VerPass" class="form-check-input"
                                        onclick="verPass(this);">
                                    <label for="VerPass" class="form-check-label">Visualizar Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <input type="submit" name="BtnIngresar" id="BtnIngresar" class="btn btn-sm btnSlim"
                                value="Ingresar">
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-sm-12 col-md-6 col-lg-6 text-center mt-2">
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="index" type="button" class="btn btnSlim">
                                        <svg class="bi" width="18" height="18" fill="currentColor">
                                            <use
                                                xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle-fill" />
                                        </svg>&nbsp;&nbsp; Regresar al sitio web
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 text-center mt-2">
                                <div class="d-grid gap-2 mx-auto">
                                    <a href="RecPass" type="button" class="btn btnSlim">
                                        <svg class="bi" width="18" height="18" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#headset" />
                                        </svg>&nbsp;&nbsp; Soporte Técnico</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modulo de ayuda login  -->

    <!-- Footer  - Bootstrap menu -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
    function verPass(ck) {
        if (ck.checked)
        $('#VerPassWord').attr("type", "text");
        else
        $('#VerPassWord').attr("type", "password");
        }
    </script>
</body>

</html>