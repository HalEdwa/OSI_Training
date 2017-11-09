
<html> 
	<body>
		<?php
			if ($_GET["firstname"] == NULL || $_GET["lastname"] == NULL || $_GET["email"] == NULL || 
				$_GET["company"] == NULL || $_GET["q1"] == NULL || $_GET["q2"] == NULL ||
				$_GET["q3"] == NULL || $_GET["q4"] == NULL || $_GET["q5"] == NULL)
			{
				header( 'Location: /QuizRetry.html');
			}

		?>
		Welcome to OSI <?php echo $_GET["firstname"] ?>
		<br><br> 
		Test Results: 
		<br>
		<?php
			//echo  $_GET["q1"]
			if ($_GET["q1"] == "C" & $_GET["q2"] == "A" & $_GET["q3"] == "D"
			& $_GET["q4"] == "E" & $_GET["q5"] == "E" ) 
			{
				echo "You Passed";
				$date = date_create();
				$time = date_timestamp_get($date);
				$handle = fopen("inducted.txt", "a");
				$dataEntry = "\r\n{$_GET["firstname"]},{$_GET["lastname"]},{$_GET["email"]},{$_GET["company"]},{$time}";
				fwrite($handle, $dataEntry);
			} else {
				echo "You Failed";
				//header( 'Location: http://www.google.com');
			}	
		?>
	</body>
</html>