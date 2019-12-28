<?php
   include("Config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
			$_SESSION['id'] = $row['ID'];
         	$_SESSION['id'] = $row['ID'];
         header("location: Welcome.php");


      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>

   <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
      <title>Login Page</title>

		<style>
        div.container
			{
				width: 100%;
				border: 1px solid gray;
			}
			header
			{
				padding: 1em;
				color: 	#000000;
				background-image:url(uiu.PNG);
				clear: left;
				text-align: center;
			}
			section
			{
				margin-left: 220px;
				border-left: 1px solid gray;
				padding: 2em;
				overflow: hidden;

			}
			footer
			{
				padding: 1em;
				color: white;
				background-color: 	#FF8C00;
				clear: left;
				text-align: center;
			}
      </style>

   </head>

   <body>
		<header>
				<div align="center"><h1> UIU Students Records Management System</h1></div></br>
		</header></br></br></br>
		<div align = "center" style = "background-color:#FF8C00; color:#FF8C00; padding:3px;"><b>Sign in</b></div>
		<div align = "center" style = "background-color:#333333; color:#333333; padding:3px;"><b>Sign in</b></div>

		<div class="w3-container">
			<section>
				<h1 align = "center"> <font size="10"> Log In </font></h1>
				<div align = "center">
					<form class="form-horizontal" action = "" method = "post">
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label" for="username">UserName OR ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name = "username" placeholder="UserName OR ID">
							</div>
						</div>
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label" for="password">Password OR mobile number:</label>
							<div class="col-sm-10">
							<input type="password" class="form-control" name = "password" placeholder="Enter password">
							</div>
						</div>
						<div align = "center" class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						</div>
						<div align="center">
							<input  type = "submit" class="btn btn-default" value = " Submit"/>
						</div>
						<div align="right">
							<a href="#" class="btn btn-default" >Forget Password</a>
						</div>
					</form>
				</div>
			</section>
		</div>
		<footer>Made by &copy; US</footer>
   </body>

</html>
