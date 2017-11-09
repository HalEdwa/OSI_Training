<?php 
// Start the session 
session_start();
?>

<html> 
	<head>
		<title>OSI Questions</title>
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
		<style>	
		font-family: helvetica;
		text-align: centre;

		body { 
			font-family: helvetica;
		text-align: centre;
		}
		form 
		{
			border: 5px solid red;
			color: black;
			font-family: helvetica;
			text-align: center;
		}
		</style>
	</head>

	<body>
		<?php
			if ($_POST["q1"] == NULL || $_POST["q2"] == NULL ||
				$_POST["q3"] == NULL || $_POST["q4"] == NULL || $_POST["q5"] == NULL)
			{
				header( 'Location: /GMPQuizRetry.html');
			}

		?>
		<h1> OSI Site Induction  </h1>
		<br>
		<?php
			//echo  $_GET["q1"]
			if ($_POST["q1"] == "B" & $_POST["q2"] == "A" & $_POST["q3"] == "D" & $_POST["q4"] == "C"& $_POST["q5"] == "D") 
			{
				$_SESSION["Quiz2"] = "yes";
				echo '<form class = "left" action="/HACCPpowerpoint.html">
				<p>You Passed GMP <br>
				Continue to learn about HACCP <br> <p>
    			<input type="submit" value="Proceed to the HACCP powerpoint!" />
				</form>';

				//put in a link to the GMP Slides
			} else {

				echo '<form class = "left" action="/GMPpowerpoint.html">
				<p>  You Failed <br>
				Look at the Presentation and attempt again <br> <p>
    			<input type="submit" value="Revise for Quiz" />
				</form>';
			}	
		?>
	</body>
</html>