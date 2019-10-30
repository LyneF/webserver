<!DOCTYPE html>
<html>
	<head>
		<title>Index page</title>
	</head>
  	
	<body style="font-family:tw cen mt">
		<h1>Welcome to Smart Electrotech!</h1> <hr>
    
		<p>This repository was created by Lyne Fotchin as per requirement of the Web Server Fundamentals class for the Electronics Engineering Technology program at Dawson college.</p>
    
		<p><br>Here are some useful references: <br>
		<ul style="list-style-type:circle;">
		<li>JavaScript: <a href="https://www.w3schools.com/js/default.asp">https://www.w3schools.com/js/default.asp</a> </li>
		<li>The DOM: <a href="https://www.w3schools.com/xml/dom_intro.asp">https://www.w3schools.com/xml/dom_intro.asp</a> </li>
		<li>Event-driven programming with the DOM: <a href="https://en.wikipedia.org/wiki/DOM_events">https://en.wikipedia.org/wiki/DOM_events</a>
		and <a href="https://www.w3schools.com/js/js_htmldom_events.asp">https://www.w3schools.com/js/js_htmldom_events.asp</a> </li>
		<li>Command line git: <a href="https://help.github.com/en/articles/set-up-git">https://help.github.com/en/articles/set-up-git</a> </li>
		</ul>
		</p>
	
		<div>
			Your course is <?php echo ($_POST['coursename']); ?>, <?php echo ($_POST['coursenum']); ?>.
			<br>
			Your Lab is #<?php echo ($_POST['labnum']);?>, <?php  echo ($_POST['labname']); ?>.
			<br>
			Your name is <?php echo ($_POST['name1']); ?> and your partner name is <?php echo ($_POST['name2']); ?>.
			<br>
			<?php echo ($_POST['id1']); ?> and <?php echo ($_POST['id2']);?> worked on this lab, from <?php echo ($_POST['date1']); ?> to <?php echo ($_POST['date2']); ?> .
			<br>
			Your teacher is <?php echo ($_POST['teacher']); ?>.
		</div>

	</body>
</html>
