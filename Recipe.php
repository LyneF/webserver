<!DOCTYPE html>

<html>
    <head>
        <title>Crêpes Recipe</title>
        <center><h1>Fine French Dining<br/>Crêpes traditionnelles</h1></center>
        <center><img src="IMG/Crêpes.jpeg" alt="Fine crepes" width="180" height="206"/></center>
        <hr>
    </head>
	
    <body bgcolor="#87CEF0" style="font-family:tw cen mt">
        <h2>Ingredients</h2>
        <p>375 ml (1 1/2cups) of flour<br>45 ml (3tbsp) of sugar<br>1 pinch of salt<br>
	2 large eggs<br>500 ml (2 cups) of milk<br>30 ml (2tbsp) of vegetable oil<br>5 ml (1tsp) of grinded nutmeg</p>
        
        <h2>Preparation</h2>
        <ol type="1">
        	<li>In a large bowl, mix flour, sugar, and salt. Add eggs and milk, then whip the batter.</li>
        	<li>Add vegetable oil and nutmeg and mix the batter.</li>
        	<li>Onto a griddle, scoop the batter using about 2 tablespoons per crepe. Tip and rotate the pan to spread the batter as thinly as possible. Brown on both sides and serve hot.</li>
        </ol>
        
        <h4>How many times would you like to multiply this recipe?</h4>
        <form name="form">
        	<input type="radio" name="num" value="2"> 2<br>
  		<input type="radio" name="num" value="3"> 3<br>
  		<input type="radio" name="num" value="4"> 4
	</form>
        
        <script>
        var radios = document.forms["form"].elements["num"];
        for(radio in radios) {
          radios[radio].onclick = function() {
              alert("Are you sure you want to multiply it "+this.value+" times?");
          }
          }
        </script>
        
        <h2>
            If you're lost, click <a href="index.php">here</a>
        </h2>

        <p>The rest of this page will soon come. Expect more details. See you.</p>
    </body>

</html>
