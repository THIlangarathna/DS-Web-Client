<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>sign</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
  <link rel="stylesheet" href="/auth/style.css">

</head>
<body>

<h2</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="apiregister" method="POST">
			<h1>Create Account</h1>
			<br>
			<input type="string" placeholder="Name" name="name" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" minlength="8" required/>
			<input type="password" placeholder="Confirm Password" name="password_confirmation" minlength="8" required/>
			<br>
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="apilogin" method="POST">
			<h1>Sign in</h1>
			<br><br>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" minlength="8" required/>
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
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



  <script  src="/auth/script.js"></script>

</body>
</html>
