<html>
	<head>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>
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
				margin-left: 220px;
				border-left: 1px solid gray;
				padding: 1em;
				overflow: hidden;
			}
			.pchead
			{
				background-color:#FF8C00;
				padding: 7px 21px;
			}
			.pcnav
			{
				background-color: #D3D3D3;
				color:#000000;
				border: 1px solid #F5F5DC;

			}
			.pcnav:hover
			{
				background-color: #D3D3D3;
				color:#FF8C00;


			}
			.pcsection
			{
				color: white;
				background-color:#FF8C00;
				border: 1px solid #F5F5DC;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

			}
			.pcsection:hover
			{
             background-color: #A9A9A9;

             }
			 .pcarticle
			 {
				background-color: #D3D3D3;
				color:#000000;
			 }
			 .pcarticle:hover
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
					<div align="center">programming contest</div>
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
				<a class="btn btn-primary pcnav" onclick="openCity('ICPC')">ICPC</a>
				<a class="btn btn-primary pcnav" onclick="openCity('NCPC')">NCPC</a>
				<a class="btn btn-primary pcnav" onclick="openCity('NJPC')">NJPC</a>
				<a class="btn btn-primary pcnav" onclick="openCity('ICT prgramming Championship')">ICT prgramming Championship</a>
			</div>
			<nav>
				<ul>
					<div>Offline And</div></br>
					<div>Online Contest</div></br>
					<div class="btn-group-vertical" >
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('Codeforce')">Codeforce</a>
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('UVA')">UVA</a>
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('Code Chef')">Code Chef</a>
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('Hacker Rank')">Hacker Rank</a>
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('URI Online Judge')">URI Online Judge</a>
						<a class="btn btn-primary btn-lg pcsection" onclick="openCity('A2 Online Judge')">A2 Online Judge </a>
					</div>
				</ul>
			</nav>
			<section>
				<h1>About Programming Contest</h1>
				<p>Search for the programming Contestent from the tab of above and left side.</p>
				<div id="Codeforce" class="w3-container city">
					<article>
						<h1>About Codeforce Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 5 of Codeforce</a>
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 6 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 7 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 8 of Codeforce</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="URI Online Judge" class="w3-container city" style="display:none">
					<article>
						<h1>About Codeforce Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of URI Online Judge</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of URI Online Judge</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of URI Online Judge</a>
						<div class="w3-center">
								<div class="w3-center w3-padding-32">
									<div class="w3-bar">
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
										<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
										<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
									</div>
								</div>
						</div><br>
					</article>
				</div>
				<div id="A2 Online Judge" class="w3-container city" style="display:none">
					<article>
						<h1>About Codeforce Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of A2 Online Judge</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of A2 Online Judge</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of A2 Online Judge</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="UVA" class="w3-container city" style="display:none">
					<article>
						<h1>About UVA Programming Contest</h1>
						<a href="Mushfiq.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of UVA</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of UVA</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of UVA</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="Code Chef" class="w3-container city" style="display:none">
					<article>
						<h1>About Code Chef Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Code Chef</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Code Chef</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Code Chef</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="Hacker Rank" class="w3-container city" style="display:none">
					<article>
						<h1>About Hacker Rank Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Hacker Rank</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Hacker Rank</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Hacker Rank</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="ICPC" class="w3-container city" style="display:none">
					<article>
						<h1>About ICPC Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of ICPC</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of ICPC</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of ICPC</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="NCPC" class="w3-container city" style="display:none">
					<article>
						<h1>About NCPC Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of NCPC</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of NCPC</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of NCPC</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="NJPC" class="w3-container city" style="display:none">
					<article>
						<h1>About NJPC Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of NJPC</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of NJPC</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of NJPC</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
								</div>
							</div>
						</div><br>
					</article>
				</div>
				<div id="ICT prgramming Championship" class="w3-container city" style="display:none">
					<article>
						<h1>About ICT prgramming Championship Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>
						<a href="project_contest.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of ICT prgramming Championship</a>
						<a href="projects.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of ICT prgramming Championship</a>
						<a href="thesis.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of ICT prgramming Championship</a>
						<div class="w3-center">
							<div class="w3-center w3-padding-32">
								<div class="w3-bar">
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-hover-theme">Â«</a>
									<a href="programming_contest.php" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">2</a>
									<a href="programming_contest_2.php" class="w3-bar-item w3-button w3-hover-theme">Â»</a>
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
