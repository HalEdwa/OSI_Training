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
			if ($_POST["firstname"] == NULL || $_POST["lastname"] == NULL || $_POST["email"] == NULL || 
				$_POST["company"] == NULL || $_POST["q1"] == NULL || $_POST["q2"] == NULL ||
				$_POST["q3"] == NULL || $_POST["q4"] == NULL)
			{
				header( 'Location: /PPandGQuizRetry.html');
			}

		?>
		<h1> OSI Site Induction  </h1>
		<br>
		<?php
			//echo  $_GET["q1"]
			if ($_POST["q1"] == "D" & $_POST["q2"] == "A" & $_POST["q3"] == "A" & $_POST["q4"] == "C") 
			{
				
				$_SESSION["firstname"] = $_POST["firstname"];
				$_SESSION["lastname"] = $_POST["lastname"];
				$_SESSION["email"] = $_POST["email"];
				$_SESSION["company"] = $_POST["company"];
				$_SESSION["Quiz1"] = "yes";

				echo '
				<form class = "left" action="/GMPpowerpoint.html">
				<p>You Passed PP and G <br>
				Continue to learn about GMP <br> <p>
    			<input type="submit" value="Proceed to the GMP powerpoint!" />
				</form>';

				//$date = date_create();
				//$time = date_timestamp_get($date);
				//$handle = fopen("inducted.txt", "a");
				//$dataEntry = "\r\n{$_POST["firstname"]},{$_POST["lastname"]},{$_POST["email"]},{$_POST["company"]},{$time}";
				//fwrite($handle, $dataEntry);
				//put in a link to the GMP Slides
			} else {

				echo '
				<form class = "left" action="/PPandGpowerpoint.html">
				<p>  You Failed <br>
				Look at the Presentation and attempt again <br> <p>
    			<input type="submit" value="Revise for Quiz" />
				</form>';
			}	
		?>
	</body>
</html>