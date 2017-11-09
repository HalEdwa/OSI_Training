
<html> 
	<body>
		<?php
			if ($_POST["firstname"] == NULL || $_POST["lastname"] == NULL || $_POST["email"] == NULL || 
				$_POST["company"] == NULL || $_POST["q1"] == NULL || $_POST["q2"] == NULL ||
				$_POST["q3"] == NULL || $_POST["q4"] == NULL || $_POST["q5"] == NULL)
			{
				header( 'Location: /QuizRetry.html');
			}

		?>
		Welcome to OSI <?php echo $_POST["firstname"] ?>
		<br><br> 
		Test Results: 
		<br>
		<?php
			//echo  $_GET["q1"]
			if ($_POST["q1"] == "C" & $_POST["q2"] == "A" & $_POST["q3"] == "D"
			& $_POST["q4"] == "E" & $_POST["q5"] == "E" ) 
			{
				echo "You Passed";
				$date = date_create();
				$time = date_timestamp_get($date);
				$handle = fopen("inducted.txt", "a");
				$dataEntry = "\r\n{$_POST["firstname"]},{$_POST["lastname"]},{$_POST["email"]},{$_POST["company"]},{$time}";
				fwrite($handle, $dataEntry);
			} else {
				echo "You Failed";
				//header( 'Location: http://www.google.com');
			}	
		?>
	</body>
</html>