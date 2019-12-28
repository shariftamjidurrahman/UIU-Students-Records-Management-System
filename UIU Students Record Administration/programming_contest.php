<?php
	session_start();

	if(isset($_SESSION['id'])){
		include ('Config.php');
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM `admin` WHERE ID = '$id'";
		$res = $db->query($sql);
		$row = mysqli_fetch_assoc($res);
		$name = $row['username'];
	}
	else {
		header('Location: home_header.php');
	}

?>

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
		<script src="/lib/w3.js"></script>
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
				background-color:  #D3D3D3;
				color:#FF8C00;
				
			}	
			
            .pcnav2
			{
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
				border: 1px solid #F5F5DC;
			 }
			 .pcarticle:hover
			{
             background-color: #FF8C00;
			 border: 1px solid #F5F5DC;
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
		<img src="uiu.jpg" alt="Lights" class="w3-image" style="width:100%;max-width:300px">
				<!-- <div align="center"><h1> Welcome </h1></div></br> -->
				<h2>
					<div align="center"><p>Programming Contest</p></div>
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
							<a href="Welcome.php" class="btn btn-default">Home</a> 
							<a href="Logout.php" class="btn btn-default">Log Out</a>
						</div>					
					</div>
				</h2>
		</header>
		<div align = "center" style = "background-color:#FF8C00; color:#FF8C00; padding:3px;"><b>Sign in</b></div>
			<div align = "center" style = "background-color:#333333; color:#333333; padding:3px;"><b>Sign in</b></div>


		<div class="w3-container">
			<div class="btn-group btn-group-justified ">	
					
					<div class="btn-group dropdown">
						<button class="btn btn-primary dropdown-toggle pcnav" type="button" data-toggle="dropdown">ICPC</button>
						<ul class="dropdown-menu">
							<a class="btn btn-primary pcnav" onclick="openCity('ICPC_2013')">ICPC-2013</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICPC_2014')">ICPC-2014</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICPC_2015')">ICPC-2015</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICPC_2016')">ICPC-2016</a>
						</ul>
					</div>
					
					<div class="btn-group dropdown">
						<button class="btn btn-primary dropdown-toggle pcnav" type="button" data-toggle="dropdown">NCPC</button>
						<ul class="dropdown-menu">
							<a class="btn btn-primary pcnav" onclick="openCity('NCPC_2013')">NCPC-2013</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NCPC_2014')">NCPC-2014</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NCPC_2015')">NCPC-2015</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NCPC_2016')">NCPC-2016</a>
						</ul>
					</div>
					
					<div class="btn-group dropdown">
						<button class="btn btn-primary dropdown-toggle pcnav" type="button" data-toggle="dropdown">NJPC</button>
						<ul class="dropdown-menu">
							<a class="btn btn-primary pcnav" onclick="openCity('NJPC_2013')">NJPC-2013</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NJPC_2014')">NJPC-2014</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NJPC_2015')">NJPC-2015</a>
							<a class="btn btn-primary pcnav" onclick="openCity('NJPC_2016')">NJPC-2016</a>
						</ul>
					</div>
					
					
					<div class="btn-group dropdown">
						<button class="btn btn-primary dropdown-toggle pcnav" type="button" data-toggle="dropdown">ICT prgramming Championship</button>
						<ul class="dropdown-menu">
							<a class="btn btn-primary pcnav" onclick="openCity('ICT_prgramming_Championship_2013')">ICT prgramming Championship-2013</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICT_prgramming_Championship_2014')">ICT prgramming Championship-2014</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICT_prgramming_Championship_2015')">ICT prgramming Championship-2015</a>
							<a class="btn btn-primary pcnav" onclick="openCity('ICT_prgramming_Championship_2016')">ICT prgramming Championship-2016</a>
						</ul>
					</div>	
					
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
				
				<div id="ICPC_2013" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICPC 2013 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">
							Sharif Tamjidur Rahman
						</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				<div id="ICPC_2014" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICPC 2014 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICPC_2015" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICPC 2015 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICPC_2016" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICPC 2016 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NCPC_2013" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NCPC 2013 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NCPC_2014" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NCPC 2014 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NCPC_2015" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NCPC 2015 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NCPC_2016" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NCPC 2016 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NJPC_2013" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NJPC 2013 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NJPC_2014" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NJPC 2014 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="NJPC_2015" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NJPC 2015 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				
				<div id="NJPC_2016" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About NJPC 2016 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICT_prgramming_Championship_2013" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICT-prgramming-Championship-2014 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICT_prgramming_Championship_2014" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICT-prgramming-Championship 2014 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICT_prgramming_Championship_2015" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>AAbout ICT-prgramming-Championship 2015 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="ICT_prgramming_Championship_2016" class="w3-container city pcnav2" style="display:none">
					<article>
						<h1>About ICT-prgramming-Championship 2016 Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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
				
				<div id="Codeforce" class="w3-container city" style="display:none">
					<article>
						<h1>About Codeforce Programming Contest</h1>
						<a href="contestent_1.php" class="btn btn-primary btn-lg btn-block pcnav">Mushfiqur Rahman</a>											
						<a href="contestent_2.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 2 of Codeforce</a>
						<a href="contestent_3.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 3 of Codeforce</a>
						<a href="contestent_4.php" class="btn btn-primary btn-lg btn-block pcnav">Contestent 4 of Codeforce</a>
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