<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Forgot Password</title>
    <!-- MDB icon -->
    <link rel="icon" href="./assets/img/logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="./assets/css/bootstrap-login-form.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="./assets/img/img.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form id="loginFP" method="POST">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Forgot Password?</p>
                        </div>
                        <div class="divider d-flex align-items-center my-4"></div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Silahkan menghubungi Admin Insight
                                Mental</label><br>
                            <label class="form-label" for="form3Example3"><a href="https://wa.link/vdmln5" target="_blank">(+62)895324689648</a></label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <a href="index.php" class="btn-back btn btn-primary" name="back">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>