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
			Student ID(s): <?php echo ($_POST['id1']); ?>, <?php echo ($_POST['id2']);?><br>Date of Experiment: <?php echo ($_POST['date1']); ?><br>Date submitted: <?php echo ($_POST['date2']); ?$
                	Teacher: <?php echo ($_POST['teacher']); ?>
		</div>
	</body>
</html>