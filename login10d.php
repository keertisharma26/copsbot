<!DOCTYPE html>
<html lang="en">

<head>
	<title>CopsBot Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login_main/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_main/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_main/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style=" background-image: linear-gradient(to right top, #54135d, #551262, #551168, #55116d, #551173, #4f116e, #48116a, #421165, #360f54, #2a0d44, #200a34, #180225);color: #eee;">
			<div class="wrap-login100" style="background-image: linear-gradient(to right top, #54135d, #551262, #551168, #55116d, #551173, #50116f, #4b116b, #461167, #3c1158, #32104a, #290e3c, #200c2e);;color: #eee;">
				
				
				
				<form action ='login1.php' method='post' class="login100-form validate-form" id="loginForm">
					<span class="login100-form-title p-b-34" style="color: #eee;">
						User Login
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
                        <button type="submit" class="btn btn-primary">Sign in</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center btn-default">
						<a href="#" class="txt3">
							Sign unpack
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('login_main/images/emblem1.jpg');"></div>
			</div>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="login_main/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login_main/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="login_main/vendor/bootstrap/js/popper.js"></script>
	<script src="login_main/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="login_main/vendor/daterangepicker/moment.min.js"></script>
	<script src="login_main/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="login_main/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="login_main/js/main.js"></script>
	<!--===============================================================================================-->
	<script src="./javascript/script.js"></script>
	<!--===============================================================================================-->
	<script src="./javascript/login.js"></script>

</body>

</html>