<?php
include_once("function.php");
connection();
session_start();
if(isset($_SESSION['username'])){
	header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="include/login.css">
		<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap-theme.min.css">
		<!--Javascript-->
		<script src="include/bootstrap/js/bootstrap.min.js"></script>
		<script src="include/bootstrap/js/jquery.min.js"></script>
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Aquino Medical Specialists Hospital, Inc.</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="index.php">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit_login" id="submit_login">Sign in</button>
						</div>
						<div class="login-register">
				            <a href="create_account.php">Create account</a> or <a href="reset_password.php">reset password</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>

<?php
	if (isset($_POST['submit_login'])) {
		user_auth($_POST['username'],$_POST['password'] );
	}
?>