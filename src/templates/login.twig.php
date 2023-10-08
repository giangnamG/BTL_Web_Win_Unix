<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Windows-Unix</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="templates/assets/styles/index.css">
</head>
<body>
<h2>hi there</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>Create Account</h1>
            <div class="social-container">
				<a href="https://www.facebook.com/ATTT.PTIT" class="social" style="color: #0000CD;"><i class="fab fa-facebook-f">fb</i></a>
			</div>
			<span>or create your account</span>
			<input type="text" name="username" placeholder="Username" />
			
			<input type="password" name="password" placeholder="Password" />
			<input type="password" name="cf-password" placeholder="Confirm Password" />
			<button name="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://www.facebook.com/ATTT.PTIT" class="social" style="color: #0000CD;"><i class="fab fa-facebook-f">fb</i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name="username" placeholder="Username or email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="templates/assets/js/main.js"></script>
</body>
</html>