<!DOCTYPE html>
<html>
	<head>
		<title>Labpage Ready</title>
	</head>

	<body>
		<style>
			.general{
				  background-color: #158DEA;
				  color: black;
				  font-family: agency fb;
				  }
			.page{
				text-align: center;
				color: black;
				font-family: "Times New Roman", Times, serif;
				}
		</style>

		<center>
			<img src="IMG/Dawson.png" alt="Dawson logo" width="300" height="150"/>
		</center>

		<div class="page">
			<?php echo ($_POST['coursename']); ?> Fundamentals <br><?php echo ($_POST['coursenum']); ?>
               		<br><br><br><br><br><br><br>
               		Laboratory experiment <?php echo ($_POST['labnum']);?><br><?php  echo ($_POST['labname']); ?>
                	<br><br><br><br><br><br><br>
                	By <?php echo ($_POST['name1']); ?> and <?php echo ($_POST['name2']); ?>
                	<br><br><br><br><br><br><br>
		</div>

		<div text-align="left">
			Student ID(s): <?php echo ($_POST['id1']); ?> and <?php echo ($_POST['id2']);?></br>
			Date of Experiment: <?php echo ($_POST['date1']); ?><br>
			Date submitted: <?php echo ($_POST['date2']); ?>
                	Teacher: <?php echo ($_POST['teacher']); ?>
		</div>
		
		<?php
		$servername = "localhost";
		$username = "php";
		$password = "";
		$dbname = "SmartElectrotech";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$fname1 = $_POST['name1'];
		$lname1 = $_POST['name1'];
		$id = $_POST['id1'];
		$teach = $_POST['teacher'];


		$sql = "INSERT INTO Students (FirstName, LastName, StudentID, Teacher)
		VALUES ('$fname1', '$lname1', '$id', '$teach')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		//Close connection
		$conn->close();
		?>	
	
		<!<a href="Lab.php" download>Download your title page her!</a>-->

	</body>
</html>
