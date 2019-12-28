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

			.eeethesisnav
			{
				background-color: #D3D3D3;
				color:#000000;
				border: 1px solid #F5F5DC;

			}
			.eeethesisnav:hover
			{
				background-color: #D3D3D3;
				color:#FF8C00;


			}
			.eeethesissection
			{
				color: white;
				background-color:#FF8C00;
				border: 1px solid #F5F5DC;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

			}
			.eeethesissection:hover
			{
             background-color: #A9A9A9;

             }
			 .eeethesisarticle
			 {
				background-color: #D3D3D3;
				color:#000000;
			 }
			 .eeethesisarticle:hover
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
					<div align="center">EEE Thesis</div>
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
			<div class="btn-group btn-group-justified">
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Hechathon')">Hechathon</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Bracathon')">Bracathon</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Appathon')">Appathon</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('ICT Championship')">ICT Championship</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Womens Hechathon')">Womens Hechathon</a>
			</div>
			<div class="btn-group btn-group-justified">
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Web')">Web</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Networking')">Networking</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Electronics')">Electronics</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Robotics')">Robotics</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Menagement System')">Menagement System</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Social Media')">Social Media</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('Social Service')">Social Service</a>
				<a class="btn btn-primary eeethesisnav" onclick="openCity('E-Commarce')">E-Commarce</a>
			</div>
			<nav>
				<ul>
					<div>Project Based on frameworks and lenguage</div>
					<div class="btn-group-vertical" >
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Android')">Android</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Java')">Java</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Python')">Python</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('.net')">.net</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('asp.net')">asp.net</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('php')">php</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('C#')">C#</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('JSP')">JSP</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Javafx')">Javafx</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('RxJava')">RxJava</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Hibarnate')">Hibarnate</a>
					<a class="btn btn-primary btn-lg eeethesissection" onclick="openCity('Spring')">Spring</a>
					</div>
				</ul>
			</nav>
			<section>
				<h1>About Project Contest</h1>
				<p>Search for the project Contestent from the tab of above and left side.</p>
				<div id="Android" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Android</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Android</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Android</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Android</a>
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
				<div id="E-Commarce" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of E-Commarce</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of E-Commarce</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of E-Commarce</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of E-Commarce</a>
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
				<div id="Web" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Web</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Web</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Web</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Web</a>
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
				<div id="Networking" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Networking</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Networking</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Networking</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Networking</a>
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
				<div id="Hechathon" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Hechathon</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Hechathon</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Hechathon</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Hechathon</a>
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
				</div><div id="Bracathon" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Bracathon</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Bracathon</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Bracathon</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Bracathon</a>
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
				</div><div id="Appathon" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Appathon</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Appathon</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Appathon</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Appathon</a>
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
				</div><div id="ICT Championship" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of ICT Championship</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of ICT Championship</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of ICT Championship</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of ICT Championship</a>
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
				</div><div id="Womens Hechathon" class="w3-container city" style="display:none">
					<article>
						<h1>About Project Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Womens Hechathon</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Womens Hechathon</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Womens Hechathon</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Womens Hechathon</a>
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
				<div id="Social Media" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Social Media</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Social Media</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Social Media</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Social Media</a>
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
				<div id="Social Service" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Social Service</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Social Service</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Social Service</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Social Service</a>
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
				<div id="Menagement System" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Menagement System</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Menagement System</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Menagement System</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Menagement System</a>
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
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Robotics</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Robotics</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Robotics</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Robotics</a>
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
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Electronics</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Electronics</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Electronics</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Electronics</a>
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
				<div id="Python" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Python</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Python</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Python</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Python</a>
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
				<div id="Java" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Java</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Java</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Java</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Java</a>
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
				<div id=".net" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of .net</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of .net</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of .net</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of .net</a>
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
				<div id="asp.net" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of asp.net</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of asp.net</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of asp.net</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of asp.net</a>
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
				<div id="C#" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of C#</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of C#</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of C#</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of C#</a>
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
				<div id="php" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of php</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of php</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of php</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of php</a>
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
				<div id="Javafx" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Javafx</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Javafx</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Javafx</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Javafx</a>
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
				<div id="RxJava" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of RxJava</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of RxJava</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of RxJava</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of RxJava</a>
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
				<div id="JSP" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of JSP</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of JSP</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of JSP</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of JSP</a>
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
				<div id="Hibarnate" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Hibarnate</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Hibarnate</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Hibarnate</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Hibarnate</a>
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
				<div id="Spring" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of Spring</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of Spring</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of Spring</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of Spring</a>
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
				<div id="DJango" class="w3-container city" style="display:none">
					<article>
						<h1>About Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block">Contestent 1 of DJango</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block">Contestent 2 of DJango</a>
							<a href="projects.php" class="btn btn-primary btn-lg btn-block">Contestent 3 of DJango</a>
							<a href="thesis.php" class="btn btn-primary btn-lg btn-block">Contestent 4 of DJango</a>
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
