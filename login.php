<?php
session_start();
include 'koneksi.php';
$validasi = isset($_GET['validasi']) ? trim($_GET['validasi']) : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPK SMART</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="icon" href="assets/images/logo/logo.png">
</head>

<body>
        <div class="spinner d-flex align-items-center justify-content-center position-fixed w-100 h-100" id="spinner">
            <button class="btn btn-secondary" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Loading...
            </button>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                setTimeout(function() {
                    document.getElementById('spinner').remove();
                    document.getElementById('auth').style.display = 'block';
                }, 1000); // Adjust the timeout duration as needed
            });
        </script>
        <style>
            #auth {
                display: none;
            }
        </style>

    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo text-center">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" style="height: 125px;"></a>
                    </div>
                    <h3 class="auth-title text-center">Log in</h3>
                    <p class="auth-subtitle mb-5 text-center">Log in with your admin account.</p>
                    <?php
                        if ($validasi == "error") {
                        echo "
                        <div class='alert alert-danger alert-dismissible fade show mb-3' role='alert'>
                        Username atau Password Anda salah!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        }
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="user" type="text" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="pass" type="password" class="form-control form-control-xl" minlength="5" maxlenght="12" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input name="view" class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                            <button name="masuk" class="btn btn-dark btn-block btn-lg shadow-lg" style="width: 45%;">Log in</button>
                            <a href="index.php" class="btn btn-secondary btn-block btn-lg shadow-lg" style="width: 45%;">Home</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
</body>

</html>