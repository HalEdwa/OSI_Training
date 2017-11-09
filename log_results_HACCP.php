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
				$_POST["q3"] == NULL || $_POST["Viruses"] == NULL || $_POST["Glass"] == NULL || $_POST["Oil"] == NULL)
			{
				header( 'Location: /HACCPQuizRetry.html');
			}
		?>
		<h1> OSI Site Induction  </h1>
		<br>
		<?php
			if ($_POST["q1"] == "A" & $_POST["q2"] == "D" & $_POST["q3"] == "B" & $_POST["Viruses"] == "Biological" & $_POST["Glass"] == "Physical" & $_POST["Oil"] == "Chemical") 
			{
				$_SESSION["Quiz3"] = "yes";
				echo '<form class = "left" action="/WHSpowerpoint.html">
				<p>You Passed HACCP <br>
				Continue to learn about WHS <br> <p>
    			<input type="submit" value="Proceed to the WHS powerpoint!" />
				</form>';
				//put in a link to the GMP Slides
			} else {
				echo '<form class = "left" action="/HACCPpowerpoint.html">
				<p>  You Failed <br>
				Look at the Presentation and attempt again <br> <p>
    			<input type="submit" value="Revise for Quiz" />
				</form>';
			}	
		?>
	</body>
</html>