<?php 

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
				$_POST["q3"] == NULL || $_POST["q4"] == NULL || $_POST["q5"] == NULL || $_POST["q6"] == NULL || $_POST["q7"] == NULL)
			{
				header( 'Location: /WHSQuizRetry.html');
			}

		?>
		<h1> OSI Site Induction  </h1>
		<br>
		<?php
			if ($_POST["q1"] == "C" & $_POST["q2"] == "B" & $_POST["q3"] == "A" & $_POST["q4"] == "A" & $_POST["q5"] == "D" & $_POST["q6"] == "A" & $_POST["q7"] == "B") 
			{
				$_SESSION["Quiz4"] = "yes";
				$date = date_create();
				$time = date_timestamp_get($date);
				$handle = fopen("inducted.txt", "a");
				$dataEntry = "\r\n{$_SESSION["firstname"]},{$_SESSION["lastname"]},{$_SESSION["email"]},{$_SESSION["company"]},{$time}";
				fwrite($handle, $dataEntry);

				echo '<form class = "left" action="">
				<p>You Passed WHS <br>
				Your have completed training <br>
				This has been logged in the OSI System <br> <p>
				</form>';
			} else {

				echo '<form class = "left" action="/WHSpowerpoint.html">
				<p>  You Failed <br>
				Look at the Presentation and attempt again <br> <p>
    			<input type="submit" value="Revise for Quiz" />
				</form>';
			}	
		?>
	</body>
</html>