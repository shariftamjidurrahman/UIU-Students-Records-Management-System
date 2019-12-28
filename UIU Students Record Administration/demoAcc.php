<?php
	session_start();

	if(isset($_SESSION['id'])){
		
		include ('Config.php');
		$id = $_SESSION['id'];
		$sqlID = "SELECT * FROM `admin` WHERE ID = '$id'";
		$resID = $db->query($sqlID);
		$row = mysqli_fetch_assoc($resID);
		$name = $row['username'];

		//PC virtual
		$sqlPC = "SELECT * FROM `programming_contest_virtual` WHERE ID = '$id'";
		$resPC = $db->query($sqlPC);
		$rowPC = mysqli_fetch_assoc($resPC);

		//PC Field
		$sqlPCF = "SELECT * FROM `programming_contest_field` WHERE ID = '$id'";
		$resPCF = $db->query($sqlPCF);
		$rowPCF = mysqli_fetch_assoc($resPCF);

		//Project
		$sqlPoj = "SELECT * FROM `project` WHERE ID = '$id'";
		$resPoj = $db->query($sqlPoj);
		$rowPoj = mysqli_fetch_assoc($resPoj);

		//projectcontest
		$sqlPojC = "SELECT * FROM `projectcontest` WHERE ID = '$id'";
		$resPojC = $db->query($sqlPojC);
		$rowPojC = mysqli_fetch_assoc($resPojC);

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
		<div class="w3-container" >
			<header>
		<img src="uiu.jpg" alt="Lights" class="w3-image" style="width:100%;max-width:300px">
				<!-- <div align="center"><h1> Welcome </h1></div></br> -->
				<h2>
					<div align="center"><?php
							
									echo $row["username"]. "'s Account<br>";
								
						?></div>
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
<!-- 			<nav>
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
			</nav> -->
			</header>
			<!-- <div align = "center" style = "background-color:#FF8C00; color:#FF8C00; padding:3px;"><b>Sign in</b></div>
			<div align = "center" style = "background-color:#333333; color:#333333; padding:3px;"><b>Sign in</b></div>	 -->
			<div class="w3-container">		
				<section>					
					<div id="" class="w3-container city">
						<h1> 
							<font size="10"> 
								<br><?php echo $row["full_name"]; ?> <br>
							</font>
						</h1>
						<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
						<h2>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_name')"><span class="glyphicon glyphicon-asterisk"></span></a>	
								<font size="6" style="font-family:verdana;">Name : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["full_name"]. "<br>";	?>								
								</font>								
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Username')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">User Name : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["username"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_ID')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">ID : </font> 
								<font size="5" style="font-family:courier;">
									 <?php echo $row["ID"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_pass')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Password : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["passcode"]. "<br>";	?>
								</font>							
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_rpass')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Resure Password : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["Rpasscode"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_mo_nu')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Mobile Number : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["mobile_number"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_bmo_nu')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["Bmobile_number"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_dob')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Date of Birth : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["date_of_birth"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_email')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Email : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["email"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_UIU_batch')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">UIU Batch : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["uiu_batch"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_cgpa')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">CGPA : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $row["cgpa"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_proj')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Projects : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>					
							<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Heck')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<!-- <font size="6" style="font-family:verdana;">Project Contest : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Brac')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_icpc')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier; color: black; ">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_ncpc')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
							<p> <font size="7">Virtual Programming Contest Rating : </font></p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_codeforce')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Codeforce : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["Codeforce"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_codechef')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Codechef : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["Codechef"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_uva')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">UVA : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["UVA"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_hacker_rank')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_uri')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_a2')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
								</font>
							</p>		
						</h2>
					</div>
				<div id="update_name" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<div>
						<div align = "left">
							<form class="form-horizontal" action = "" method = "post">
								<div class="form-group form-group-lg">
									<label class="col-sm-2 control-label" for="full_name">Full Name:</label>
									<div class="col-sm-10">
										<input type = "text" name = "full_name" class = "form-control"  placeholder="Full Name"/>
									</div>
								</div>
								<div align="center">
									<input  type = "submit" class="btn btn-default" name = "changeFN" value = " Submit"/>
								</div>
							</form>
						</div>
						<?php 
							if(isset($_POST['changeFN'])) 
							{
								if($_POST['full_name'] != "")
								{
									$myfull_name = mysqli_real_escape_string($db,$_POST['full_name']);	
									$sql="UPDATE `admin` SET `full_name`='$myfull_name' WHERE ID = '$id'";
									if(mysqli_query($db,$sql))
									{
										mysqli_close($db);
										?>
											<script type="text/javascript">
												parent.window.location='demoAcc.php';
											</script>
										<?php	
									}
									else
									{
										echo "Error: " . $sql . "<br>" . mysqli_error($db);
									}
								}
							}						
						?>
						</div>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p> 
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $rowPC["Codeforce"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_Username" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>	
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo  $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<div>
							<?php 
								if($_SERVER["REQUEST_METHOD"] == "POST") 
									{
										if($_POST['username'] != "")
										{
										$myusername = mysqli_real_escape_string($db,$_POST['username']);
										$sql="UPDATE `admin` SET `username`='$myusername' Where ID = '$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
										}
									}						
								?>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="username">UserName:</label>
										<div class="col-sm-10">
											<input type = "text" name = "username" class = "form-control"  placeholder="User Name"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" value = "Submit"/>
									</div>
								</form>						
							</div>
						</div>

						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>"	 ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>"	 ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?ph	echo $row["email"]. "<br>"	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo  $row["cgpa"]. "<br>"; ?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>	 -->						
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php		echo $rowPC["Codechef"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php		echo $rowPC["UVA"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php		echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_ID" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";?>
							</font>								
						</p>						
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";?>
							</font>
						</p>
						<div>
							<?php 
								if($_SERVER["REQUEST_METHOD"] == "POST") 
								{
									if($_POST['id'] != "")
									{
										$myID = mysqli_real_escape_string($db,$_POST['id']);
										$sql="UPDATE `admin` SET `ID`='$myID' Where ID = '$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>	
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="id">ID:</label>
										<div class="col-sm-10">
											<input type = "text" name = "id" class = "form-control" placeholder="ID"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" value = "Submit"/>
									</div>
								</form>						
							</div>
						</div>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $rowPC["Codechef"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_pass" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>"; ?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";?>
								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="password1">Password:</label>
										<div class="col-sm-10">
											<input type = "password" name = "password1" class = "form-control" placeholder="Password"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN" value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['password1'] != "")
									{
										$mypassword1 = mysqli_real_escape_string($db,$_POST['password1']);
										$sql="UPDATE `admin` SET `passcode`='$mypassword1' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>
						</div>		
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?phpecho $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_rpass" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10">	echo "<br>". $row["full_name"]. "<br>";	?></font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>	
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $row["username"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";?>
							</font>
							
						</p>						
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="password2">Resure Password:</label>
										<div class="col-sm-10">
											<input type = "password" name = "password2" class = "form-control" placeholder="Resure Password"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['password2'] != "")
									{
										$mypassword2 = mysqli_real_escape_string($db,$_POST['password2']);
										$sql="UPDATE `admin` SET `Rpasscode`='$mypassword2' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
						</div>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_mo_nu" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="mobile_number1">Mobile Number:</label>
										<div class="col-sm-10">
											<input type = "number_format" name = "mobile_number1" class = "form-control" placeholder="Mobile Number"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['mobile_number1'] != "")
									{
										$mynumber1 = mysqli_real_escape_string($db,$_POST['mobile_number1']);
										$sql="UPDATE `admin` SET `mobile_number`='$mynumber1' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>					
						</div>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_bmo_nu" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="mobile_number2">Backup Mobile Number:</label>
										<div class="col-sm-10">
											<input type = "number_format" name = "mobile_number2" class = "form-control" placeholder="Backup Mobile Number"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['id'] != "")
									{
										$mynumber2 = mysqli_real_escape_string($db,$_POST['mobile_number2']);
										$sql="UPDATE `admin` SET `Bmobile_number`='$mynumber2' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>			
						</div>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">Project : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_email" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php		echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="email">Email Address:
										</label>
										<div class="col-sm-10">
											<input type = "email" name = "email" class = "form-control" placeholder="Email Address"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['email'] != "")
									{
										$myemail = mysqli_real_escape_string($db,$_POST['email']);	
										$sql="UPDATE `admin` SET `email`='$myemail' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
						</div>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_UIU_batch" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="uiu_batch">UIU Batch:
										</label>
										<div class="col-sm-10">
											<input type = "text" name = "uiu_batch" class = "form-control" placeholder="uiu_batch"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['uiu_batch'] != "")
									{
										$myuiubatch = mysqli_real_escape_string($db,$_POST['uiu_batch']);
										$sql="UPDATE `admin` SET `uiu_batch`='$myuiubatch' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>									
					</div>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_dob" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<div>

								<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="date_of_birth">Date of birth:</label>
										<div class="col-sm-10">
											<input type = "text" name = "date_of_birth" class = "form-control" placeholder="Date of birth"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['id'] != "")
									{
										$mydate_of_birth = mysqli_real_escape_string($db,$_POST['date_of_birth']);	
										$sql="UPDATE `admin` SET `date_of_birth`='$mydate_of_birth' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>									
						</div>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $rowPC["Codeforce"]. "<br>" ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_cgpa" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<div>

								<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="cgpa">CGPA:</label>
										<div class="col-sm-10">
											<input type = "number_format" name = "cgpa" class = "form-control" placeholder="CGPA"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['cgpa'] != "")
									{
										$mycgpa = mysqli_real_escape_string($db,$_POST['cgpa']);
										$sql="UPDATE `admin` SET `cgpa`='$mycgpa' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
						</div>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_codeforce" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="Codeforce">Codeforce:
										</label>
										<div class="col-sm-10">
											<input type = "number_format" name = "Codeforce" class = "form-control" placeholder="Codeforce ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['Codeforce'] != "")
									{
										$mycodeforce = mysqli_real_escape_string($db,$_POST['Codeforce']);
										$sql="UPDATE `programming_contest_virtual` SET `Codeforce`='$mycodeforce' Where ID='$id'";

										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>							
						</div>
						
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_codechef" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Heck')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Brac')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>	 -->						
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>			
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="Codechef">Codechef:</label>
										<div class="col-sm-10">
											<input type = "number_format" name = "Codechef" class = "form-control" placeholder="Codechef Ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
						</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['Codechef'] != "")
									{
										$mycodechef = mysqli_real_escape_string($db,$_POST['Codechef']);
										$sql="UPDATE `programming_contest_virtual` SET `Codechef`='$mycodechef' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
							
						</div>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_uva" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>	
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	 ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Heck')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_Brac')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_icpc')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<a class="btn btn-primary btn-xv pcnav" onclick="openCity('update_ncpc')"><span class="glyphicon glyphicon-asterisk"></span></a>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="UVA">UVA : </label>
										<div class="col-sm-10">
											<input type = "number_format" name = "UVA" class = "form-control" placeholder="UVA Ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['UVA'] != "")
									{
										$myuva = mysqli_real_escape_string($db,$_POST['UVA']);
										$sql="UPDATE `programming_contest_virtual` SET `UVA`='$myuva' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
							
						</div>

						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_hacker_rank" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="Hacker_Rank">Hacker Rank : </label>
										<div class="col-sm-10">
											<input type = "number_format" name = "Hacker_Rank" class = "form-control" placeholder="Hacker Rank Ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['Hacker_Rank'] != "")
									{
										$myhacker_rank = mysqli_real_escape_string($db,$_POST['Hacker_Rank']);
										$sql="UPDATE `programming_contest_virtual` SET `Hacker_Rank`='$myhacker_rank'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>		
							
						</div>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_uri" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
								echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>								
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">>Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="URI_Online_Judge">URI Online Judge : </label>
										<div class="col-sm-10">
											<input type = "number_format" name = "URI_Online_Judge" class = "form-control" placeholder="URI Online Judge Ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['URI_Online_Judge'] != "")
									{
										$myuri_online = 
										mysqli_real_escape_string($db,$_POST['URI_Online_Judge']);

										$sql="UPDATE `programming_contest_virtual` SET `URI_Online_Judge`= '$myuri_online' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>									
						</div>					
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_a2" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php echo $row["ID"]. "<br>"; 	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font> 
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="A2_Online_Judge">A2 Online Judge : </label>
										<div class="col-sm-10">
											<input type = "number_format" name = "A2_Online_Judge" class = "form-control" placeholder="Hacker Rank Ranking"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['A2_Online_Judge'] != "")
									{
										$my_a2 = mysqli_real_escape_string($db,$_POST['A2_Online_Judge']);
										$sql="UPDATE `programming_contest_virtual` SET `A2_Online_Judge`='$my_a2' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>									
						</div>
					</h2>
				</div>
				<div id="update_Heck" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="projectcontest">Heckathon:
										</label>
										<div class="col-sm-10">
											<input type = "text" name = "projectcontest" class = "form-control" placeholder="ICPC update"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['projectcontest'] != "")
									{
										$myprojectcontest = mysqli_real_escape_string($db,$_POST['projectcontest']);
										$sql="UPDATE `projectcontest` SET `project_contest_name`='$myprojectcontest' Where ID='$id' ";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>							
						</div>
							<p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p>							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>"; ?>
							</font>
						</p>					
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_Brac" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>

						<!-- <div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="projectcontest">Bracathon:
										</label>
										<div class="col-sm-10">
											<input type = "text" name = "projectcontest" class = "form-control" placeholder="ICPC update"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								// if(isset($_POST['changeFN'])) 
								// {
								// 	if($_POST['projectcontest'] != "")
								// 	{
								// 		$myprojectcontest = mysqli_real_escape_string($db,$_POST['projectcontest']);
								// 		$sql="UPDATE `programming_contest_field` SET `projectcontest`='$myprojectcontest' Where ID='$id' and `project_contest_name`='Bracathon'";
								// 		if(mysqli_query($db,$sql))
								// 		{
								// 			mysqli_close($db);
								// 			?>
								// 				<script type="text/javascript">
								// 					parent.window.location='demoAcc.php';
								// 				</script>
								// 			<?php				
								// 		}
								// 		else
								// 		{
								// 			echo "Error: " . $sql . "<br>" . mysqli_error($db);
								// 		}
								//	}
								//}						
							?>							
						</div> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>"; ?>
							</font>
						</p>						
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_icpc" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="ICPC">ICPC:
										</label>
										<div class="col-sm-10">
											<input type = "text" name = "ICPC" class = "form-control" placeholder="ICPC update"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['ICPC'] != "")
									{
										$myICPC = mysqli_real_escape_string($db,$_POST['ICPC']);
										$sql="UPDATE `programming_contest_field` SET `ICPC`='$myICPC' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>							
						</div>	
							<p>
								<font size="6" style="font-family:verdana;">NCPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["NCPC"]. "<br>";	?>
								</font>
							</p>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>";	?>
							</font>
						</p>						
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
				</div>
				<div id="update_ncpc" class="w3-container city pcnav2" style="display:none">
					<h1> 
						<font size="10"> 
							<?php	echo "<br>". $row["full_name"]. "<br>";	?>
						</font>
					</h1>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
					<h2>
						<p>	
							<font size="6" style="font-family:verdana;">Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["full_name"]. "<br>";	?>
							</font>								
						</p>
						<p>
							<font size="6" style="font-family:verdana;">User Name : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["username"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">ID : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["ID"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["passcode"]. "<br>";	?>
							</font>
							
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Resure Password : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Rpasscode"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["mobile_number"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Backup Mobile Number : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["Bmobile_number"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Date of Birth : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["date_of_birth"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Email : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["email"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UIU Batch : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["uiu_batch"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">CGPA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $row["cgpa"]. "<br>";	?>
							</font>
						</p>
						<p>
								<font size="7" >Perticipated Project Contest : </font> 
							</p>
							<p>
								<!-- <font size="6" style="font-family:verdana;">Heckathon : </font>  -->
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPojC["project_contest_name"]. "<br>";	?>
								</font>
							</p>
							<!-- <p>
								<font size="6" style="font-family:verdana;">Bracathon : </font> 
								<font size="5" style="font-family:courier;">
									<?php	//echo $rowPoj["project"]. "<br>";	?>
								</font>
							</p> -->							
							<p>
								<font size="7" >Perticipated Programming Contest : </font> 
							</p>
							<p>
								<font size="6" style="font-family:verdana;">ICPC : </font> 
								<font size="5" style="font-family:courier;">
									<?php	echo $rowPCF["ICPC"]. "<br>";	?>
								</font>
							</p>
							<div>
							<div align = "left">							
								<form class="form-horizontal" action = "" method = "post">
									<div class="form-group form-group-lg">
										<label class="col-sm-2 control-label" for="NCPC">NCPC:
										</label>
										<div class="col-sm-10">
											<input type = "text" name = "NCPC" class = "form-control" placeholder="ICPC update"/>
										</div>
									</div>
									<div align="center">
										<input  type = "submit" class="btn btn-default" name = "changeFN"  value = "Submit"/>
									</div>
								</form>						
							</div>
							<?php 
								if(isset($_POST['changeFN'])) 
								{
									if($_POST['NCPC'] != "")
									{
										$myICPC = mysqli_real_escape_string($db,$_POST['ICPC']);
										$sql="UPDATE `programming_contest_field` SET `NCPC`='$myNCPC' Where ID='$id'";
										if(mysqli_query($db,$sql))
										{
											mysqli_close($db);
											?>
												<script type="text/javascript">
													parent.window.location='demoAcc.php';
												</script>
											<?php				
										}
										else
										{
											echo "Error: " . $sql . "<br>" . mysqli_error($db);
										}
									}
								}						
							?>							
						</div>
						<p> <font size="7">Virtual Programming Contest Rating : </font></p>
						<p>
							<font size="6" style="font-family:verdana;">Codeforce : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codeforce"]. "<br>"; ?>
							</font>
						</p>					
						<p>
							<font size="6" style="font-family:verdana;">Codechef : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Codechef"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">UVA : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["UVA"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">Hacker Rank : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["Hacker_Rank"]. "<br>"; ?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">URI Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["URI_Online_Judge"]. "<br>";	?>
							</font>
						</p>
						<p>
							<font size="6" style="font-family:verdana;">A2 Online Judge : </font> 
							<font size="5" style="font-family:courier;">
								<?php	echo $rowPC["A2_Online_Judge"]. "<br>";	?>
							</font>
						</p>
					</h2>
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
				<?php
					$db->close();
				?>
				</section>					
			</div>
		</div>	
		<footer>Made by &copy; US</footer>
	</body>		
</html>