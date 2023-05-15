<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Furniture Store</title>
    <!-- Icon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(images/furniture.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            <form action="" class="signin-form">
                                <div class="form-group mt-3">
									<input type="text" class="form-control" required>
									<label name="email" class="form-control-placeholder" for="email">Email</label>
								</div>
                                <div class="form-group mt-3">
									<input id="password-field" type="password" class="form-control" required>
		              				<label class="form-control-placeholder" for="password">Password</label>
		              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
                                <div class="form-group">
                                    <a href="..\admin\index.php"  class="form-control btn btn-primary rounded submit px-3" >Sign In</a>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <br>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <p class="text-right">or login with</p>
                                        <p class="social-media d-flex justify-content-end">
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a Member? <a href="register.php">Sign Up</a></p>
                            <!-- button back -->
                            <div class="form-group">
                                <a href="..\index.php"  class=" btn btn-primary rounded submit px-3" >Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>