<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
//$conn = mysqli_connect("localhost", "fpkvpsnn_tierra", "Tierraoro2020*", "fpkvpsnn_tierraoroDB");
$conn = mysqli_connect("localhost", "root", "", "tierraorodb");
// SQL query to fetch information of registerd users and finds user match.

$query = "SELECT username,password FROM login WHERE username='$username' AND password='$password' LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: index.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>
<!DOCTYPE html>
<html lang="es">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Tierra Oro | Panel</title>
		<meta name="description" content="Panel Administrativo">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="assets/plugins/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--begin::datatables -->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


         <!--begin::Page Custom Styles(used by this page) -->
        <link href="assets/css/pages/login/login-v1.css" rel="stylesheet" type="text/css" />
		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/aside/navy.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  style="background-image: url(assets/media/misc/bg_1.jpg)"  class="kt-login-v1--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid__item  kt-grid__item--fluid kt-grid kt-grid--hor kt-login-v1" id="kt_login_v1">
	<!--begin::Item-->
	<div class="kt-grid__item">
		<!--begin::Heade-->
		<div class="kt-login-v1__head">
			<div class="kt-login-v1__logo">
				<a href="#">
					<img src="assets/media/logos/logo-7.png" alt=""/>
				</a>
			</div>
			<div class="kt-login-v1__signup">
				<h4 class="kt-login-v1__heading">¿Necesita una cuenta?</h4>
				<a href="#">Solicitar</a>
			</div>
		</div>
		<!--begin::Head-->
	</div>
	<!--end::Item-->

	<!--begin::Item-->
	<div class="kt-grid__item  kt-grid kt-grid--ver  kt-grid__item--fluid">
		<!--begin::Body-->
		<div class="kt-login-v1__body">
			<!--begin::Section-->
			<div class="kt-login-v1__section">
				<div class="kt-login-v1__info">
					<h3 class="kt-login-v1__intro">Tierra Oro Yucatán, Panel Administrativo</h3>
					<p>Bienvenido</p>
				</div>
			</div>
			<!--begin::Section-->

			<!--begin::Separator-->
			<div class="kt-login-v1__seaprator"></div>
			<!--end::Separator-->

		 	<!--begin::Wrapper-->
			<div class="kt-login-v1__wrapper">
				<div class="kt-login-v1__container">
					<h3 class="kt-login-v1__title">
						Inicie Sesión
					</h3>

					<!--begin::Form-->
					<form method="POST" class="kt-login-v1__form kt-form" autocomplete="on" id="kt_login_form">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Username" name="username" autocomplete="on" id="username" required>
						</div>
						<div class="form-group">
							<input class="form-control" type="password" placeholder="Password" name="password" autocomplete="on" id="password" required>
						</div>

						<div class="kt-login-v1__actions">
							<a href="#" class="kt-login-v1__forgot">
								¿ Olvidó el Password ?
							</a>
							<button type="submit" name="submit" value="Login" class="btn btn-pill btn-elevate" >Iniciar Sesión</button>
						</div>
					</form>
					<!--end::Form-->

					<!--begin::Divider-->
					<div class="kt-login-v1__divider">
						<div class="kt-divider">
							<span></span>
							<span>-</span>
							<span></span>
						</div>
					</div>
					<!--end::Divider-->

				</div>
			</div>
			<!--end::Wrapper-->
		</div>
		<!--begin::Body-->
	</div>
	<!--end::Item-->

	<!--begin::Item-->
	<div class="kt-grid__item">
		<div class="kt-login-v1__footer">
			<div class="kt-login-v1__menu">
				<a href="#">Página Web</a>
				<a href="#">Webmail</a>
				<a href="#">Contacto</a>
			</div>

			<div class="kt-login-v1__copyright">
				<a href="#">&copy; 2020 Tierra Oro</a>
			</div>
		</div>
	</div>
	<!--end::Item-->
</div>
	</div>
	<!-- end:: Page -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "metal": "#c4c5d6",
            "light": "#ffffff",
            "accent": "#00c5dc",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995",
            "focus": "#9816f4"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		    	   <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="assets/js/pages/custom/user/login.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>