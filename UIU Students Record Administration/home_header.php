<!DOCTYPE html>
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

		<style>
			div.container
			{
				width: 100%;
				border: 1px solid gray;
			}
			header
			{
				padding: 4em;
				color: 	#000000;
				clear: left;
				text-align: center;
			}
			nav
			{
				float: left;
				max-width: 160px;
				margin: 0;
				padding: 1em;
			}
			nav ul
			{
				list-style-type: none;
				padding: 0;
			}
			nav ul a
			{
				text-decoration: none;
			}
			section
			{
				margin-left: 205px;

				padding: 1em;
				overflow: hidden;
			}
			article
			{
				margin-left: 205px;
			}
			footer
			{
				padding: 1em;
				color: white;
				background-color: 	#FF8C00;
				clear: left;
				text-align: center;
			}
			.homesection
			{
				color: white;
				background-color:#FF8C00;
				border: 1px solid #F5F5DC;
				-webkit-transition-duration: 0.4s;
                 transition-duration: 0.4s;

			}
			.homesection:hover
			{
             background-color: #A9A9A9;
			 border: 1px solid #F5F5DC;
			 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

             }
			 .homesection:focus
			 {
				 background-color: #A9A9A9;
			 border: 1px solid #F5F5DC;

			 }
			 img {
    width: 100%;
    height: auto;
}
		</style>
	</head>
	<body>
		<div class="w3-container">
			<header>

				<div>
					<div align="left">
						<h1>
							<img src="uiu.jpg" alt="Lights" class="w3-image" style="width:100%;max-width:300px">
							<div align="center">
								UIU Students Records Management System
							</div>
						</h1>
					</div>
				</div>

				<div align="right">
					<div class="btn-group-vertical" >
						<style>
						.btn-default:hover,
							.btn-default:focus,
							.btn-default:active
							{
								background-color: #ebebeb;
								color: #333;
								border-color: #adadad;
							}
						</style>
						<a href="Signin.php" class="btn btn-default">Sign Up</a>
						<a href="Login.php" class="btn btn-default">Log In</a>
					</div>
				</div>
			</header>
			<div align = "center" style = "background-color:#FF8C00; color:#FF8C00; padding:3px;"><b>Sign in</b></div>
			<div align = "center" style = "background-color:#333333; color:#333333; padding:3px;"><b>Sign in</b></div>
			<nav>
				<ul>
					<div class="btn-group-vertical" >
						<div class="btn-group-vertical" >
						<a href="programming_contest.php" class="btn btn-primary btn-md homesection">Programming Contest</a>
						<a href="project_contest.php" class="btn btn-primary btn-md homesection">CSE Project Contest</a>
						<a href="projects.php" class="btn btn-primary btn-md homesection">CSE Projects</a>
						<a href="thesis.php" class="btn btn-primary btn-md homesection">CSE Thesis</a>
						<a href="eee_project_contest.php" class="btn btn-primary btn-md homesection">EEE Project Contest</a>
						<a href="eee_project.php" class="btn btn-primary btn-md homesection">EEE Projects</a>
						<a href="eee_thesis.php" class="btn btn-primary btn-md homesection">EEE Thesis</a>
						<a href="bba_project.php" class="btn btn-primary btn-md homesection">BBA Projects</a>
					</div>
					</div>
				</ul>
			</nav>

			<section>
				<h1>About Students</h1>
				<p>
					<font>
						Here we will find the datas,statistics,status of uiu students,programmers etc. .
					</font>
				</p>
			</section >


			<footer>Made by &copy; US</footer>

		</div>

	</body>
</html>
