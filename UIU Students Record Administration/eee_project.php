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
				padding: 1em;
				color: 	#000000;
				background-image:url(uiu.PNG);
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
				margin-left: 180px;
				border-left: 1px solid gray;
				padding: 1em;
				overflow: hidden;
			}
			footer
			{
				padding: 1em;
				color: white;
				background-color: black;
				clear: left;
				text-align: center;
			}


			.eeenav
			{
				background-color: #D3D3D3;
				color:#000000;
				border: 1px solid #F5F5DC;

			}
			.eeenav:hover
			{
				background-color: #D3D3D3;
				color:#FF8C00;


			}
			.eeesection
			{
				color: white;
				background-color:#FF8C00;
				border: 1px solid #F5F5DC;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

			}
			.eeesection:hover
			{
             background-color: #A9A9A9;

             }
			 .eeearticle
			 {
				background-color: #D3D3D3;
				color:#000000;
			 }
			 .eeearticle:hover
			{
             background-color: #FF8C00;
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
				<h2>
					<div align="center">EEE Project</div>
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
				</h2>
		</header>
		<div class="w3-container">
			<nav>
				<ul>
					<div>Project Based on Functionality</div>
					<div class="btn-group-vertical" >
					<a class="btn btn-primary eeenav" onclick="openCity('Networking') ">Networking</a>
					<a class="btn btn-primary eeenav" onclick="openCity('Electronics') ">Electronics</a>
					<a class="btn btn-primary eeenav" onclick="openCity('Robotics') ">Robotics</a>
					</div>
				</ul>
			</nav>
			<section>
				<h1>About EEE Project</h1>
				<p>Search for the project Contestent from the tab of above and left side.</p>



				<div id="Networking" class="w3-container city" style="display:none">
					<article>
						<h1>About EEE Networking Project</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 1 of Networking</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 2 of Networking</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 3 of Networking</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 4 of Networking</a>
							<div class="w3-center">
								<div class="w3-center w3-padding-32">
									<div class="w3-bar">
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">«</a>
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">»</a>
									</div>
								</div>
							</div><br>
					</article>
				</div>
				<div id="Robotics" class="w3-container city" style="display:none">
					<article>
						<h1>About EEE Robotics Project</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 1 of Robotics</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 2 of Robotics</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 3 of Robotics</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 4 of Robotics</a>
							<div class="w3-center">
								<div class="w3-center w3-padding-32">
									<div class="w3-bar">
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">«</a>
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">»</a>
									</div>
								</div>
							</div><br>
					</article>
				</div>
				<div id="Electronics" class="w3-container city" style="display:none">
					<article>
						<h1>About EEE Electronics Project</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 1 of Electronics</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 2 of Electronics</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 3 of Electronics</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block eeearticle">Contestent 4 of Electronics</a>
							<div class="w3-center">
								<div class="w3-center w3-padding-32">
									<div class="w3-bar">
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">«</a>
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">»</a>
									</div>
								</div>
							</div><br>
					</article>
				</div>
				<script>
					function openCity(cityName)
					{
						var i;
						var x = document.getElementsByClassName("city");
						for (i = 0; i < x.length; i++)
						{
							x[i].style.display = "none";
						}
						document.getElementById(cityName).style.display = "block";
					}
				</script>
			</section>
		</div>

		<footer>Made by &copy; US</footer>
	</body>
</html>
