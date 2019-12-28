<?php
	session_start();

	if(isset($_SESSION['id'])){

		include ('Config.php');
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM `admin` WHERE ID = '$id'";
		$res = $db->query($sql);
		$row = mysqli_fetch_assoc($res);
		$name = $row['username'];
		$id = $row['ID'];
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
			section
			{
				margin-left: 220px;
				border-left: 1px solid gray;
				padding: 1em;
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
							<a href="Welcome.php" class="btn btn-default">Home</a>

							<a href="demoAcc.php" class="btn btn-default">My Account</a>
							<a href="Logout.php" class="btn btn-default">Log Out</a>
						</div>
					</div>
				</h2>
		</header>
		<div class="w3-container">
			<section>
				<?php
					include("Config.php");

				?>
				<h1>
					<font size="10">
						<?php
							$sql = "SELECT `full_name` FROM `admin` where ID = '$id'";
							$result = $db->query($sql);
							if ($result->num_rows > 0)
							{
								// output data of each row
								while($row = $result->fetch_assoc())
								{
									echo "<br>". $row["full_name"]. "<br>";
								}
							}
							else
							{
								echo "0 results";
							}
						?>
					</font>
				</h1>
				<h2>
					<img class="w3-border w3-padding w3-image" src="Capture.jpg" alt="Lights" width="100" height="100">
				</h2>
				<div align = "center" style = "background-color:#FF8C00; color:#FF8C00; padding:3px;"><b>Sign in</b></div>

				<div class="btn-group btn-group-justified">
					<a class="btn btn-primary pcnav" onclick="openCity('Personal')">Personal</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Educational')">Educational</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Thesis')">Thesis</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Projects')">Projects</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Programming_Contests')">Programming Contests</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Project_Contests')">Project Contests</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Work_Experience')">Work Experience</a>
					<a class="btn btn-primary pcnav" onclick="openCity('Research_Work')">Research Work</a>
				</div>
				<div id="Personal" class="w3-container city" >
					<p>
						<font size="6" style="font-family:verdana;">Name : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["full_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Email : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["email"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Mobile Number : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["mobile_number"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>
				<div id="Educational" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">ID : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["ID"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">UIU Batch:</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["uiu_batch"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">CGPA:</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `admin` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["cgpa"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>
				<div id="Thesis" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">Thesis Type : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `thesis` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Thesis_type"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Thesis Name : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `thesis` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Thesis_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Thesis Description : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `thesis` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Thesis_description"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>

				<div id="Projects" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">Project Type : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `project` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["project type"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Projects : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `project` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["project"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>

				</div>

				<div id="Programming_Contests" class="w3-container city" style="display:none">
					<h1> <font size="7">Programming Contest : </font></h1>
					<p>
						<font size="6" style="font-family:verdana;">Participated Programming Contest : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_field` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["programming_contest_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">ICT possition : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT  * FROM `programming_contest_field` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["ICT"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">ICPC possition : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_field` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["ICPC"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">NCPC possition : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_field` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["NCPC"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">NJPC possition : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_field` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["NJPC"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<h3> <font size="7">Programming Contest Rankings : </font></h3>
					<p>
						<font size="6" style="font-family:verdana;">Codeforce</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_virtual` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Codeforce"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Codechef</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_virtual` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Codechef"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">UVA</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_virtual` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["UVA"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Hacker Rank</font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `programming_contest_virtual` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Hacker_Rank"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>
				<div id="Project_Contests" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">Participated Project Contest : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `projectcontest` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["project_contest_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Project Type : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `projectcontest` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["project type"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Projects of Project Contest : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `projectcontest` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["project_contest"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>
				<div id="Work_Experience" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">Company name : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `workexperience` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["compnay_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Work Type : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `workexperience` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["work_type"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Possition : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `workexperience` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["possition"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Experience : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `workexperience` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["experience"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
				</div>
				<div id="Research_Work" class="w3-container city" style="display:none">
					<p>
						<font size="6" style="font-family:verdana;">Research Type : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `researchwork` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["research_type"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Research Topic Name : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `researchwork` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["research_topic_name"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Journal : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `researchwork` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Journal"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Publication : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `researchwork` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Publication"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
					<p>
						<font size="6" style="font-family:verdana;">Megazine : </font>
						<font size="5" style="font-family:courier;">
							<?php
								$sql = "SELECT * FROM `researchwork` where ID = '$id'";
								$result = $db->query($sql);
								if ($result->num_rows > 0)
								{
									// output data of each row
									while($row = $result->fetch_assoc())
									{
										echo $row["Megazine"]. "<br>";
									}
								}
								else
								{
									echo "0 results";
								}
							?>
						</font>
					</p>
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

		<footer>Made by &copy; US</footer>
	</body>
</html>
