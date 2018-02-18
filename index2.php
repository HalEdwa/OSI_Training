<!DOCTYPE html>
<html >
	<head>
		
		<style>	
		<title>OSI Questions</title>
 		<style>
			.form1 
			{
				color: black;
				font-family: helvetica;
				text-align: center;
			}

			/* Create two equal columns that floats next to each other */
			* {
   				box-sizing: border-box;
			}

			body {
			    margin: 0;
			}

			/* Create two equal columns that floats next to each other */
			.column {
			    float: left;
			    width: 50%;
			    padding: 10px;
			    height: 300px; /* Should be removed. Only for demonstration */
			}

			/* Clear floats after the columns */
			.row:after {
			    content: "";
			    display: table;
			    clear: both;
			}

			.left {
			    width: 80%;
			}

			.right {

			    text-indent: 100px;
			}

			.password {
				padding: 10px;
				text-align: center;
				float: center;
			}
			.uncompleted {
			cursor: pointer;
		    background-color: #008CBA; /* BLUE */
		    border: 2px;
		    border-color: black;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
			}
			.completed {
			cursor: pointer;
		    background-color: #4CAF50; /* Green */
		    border: black;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
			}
			.button:hover {background-color: #3e8e41}

			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);

		</style>
	</head>

	<body>
		<?php
			if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			} else {
				$uri = 'http://';
			}
			function test(){
				$password = $_POST['password'];
				echo '<p>function run.</p> ';
				if ($password == 'osiTester') {
					$_SESSION["sessionInit"] = "On";
				} else {
					$_SESSION["sessionInit"] = "Off";
					echo '
					<script>
						alert("Incorrect password");		
					</script>';	
				}
			}
			function initial(){
					   echo '<br>
					   	<p>First fill in your contact information under the "Contacts" tab.</p> 
					   	<p>Then click on each sections tab to learn from the power point and take the quiz. </p>
					   	<p>The section tab will turn green when a section is complete. </p>
					   	<p> When all sections are green you will have completed the induction. </p>
					   ';
			}
			function ppandg(){
				echo '
					<div class="row">
						<div class="column">
							<br> 
							<iframe src="https://docs.google.com/presentation/d/1UIHw023W4VGBLIG_WRRMbMo_yqUqn4F07WFJpCjCw90/embed?start=false&loop=false&delayms=3000" frameborder="0" width="725" height="550" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
							<br><br>
						</div>
						<div class="column, right">
							<br><br>
							<form action="index2.php">
		    					<input type="submit" name="pp&gQuiz" value="Quiz" onclick="ppandgQuiz()" />
							</form>

						</div>
					</div>
				';
			}
			function gmp(){
				echo '
					<div class="row">
						<div class="column">
							<br> 
							<iframe src="https://docs.google.com/presentation/d/1N_1ZXede6NZ7kl3pkbAu80JRgIuwSXWGuuWmjRAMFjA/embed?start=false&loop=false&delayms=3000" frameborder="0" width="725" height="550" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
							<br><br>
						</div>
						<div class="column, right">
							<br><br>
							<form action="index2.php">
		    					<input type="submit" name="gmpQuiz" value="Quiz" onclick="gmpQuiz()" />
							</form>

						</div>
					</div>
				';
			}
			function haccp(){
				echo '
					<div class="row">
						<div class="column">
							<br> 
							<iframe src="https://docs.google.com/presentation/d/1FlI_Zk3MClCSbVI6DAuDtseCY_J9m7IDyVHuBw_rdqo/embed?start=false&loop=false&delayms=3000" frameborder="0" width="725" height="550" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
							<br><br>
						</div>
						<div class="column, right">
							<br><br>
							<form action="index2.php">
		    					<input type="submit" name="haccpQuiz" value="Quiz" onclick="haccpQuiz()" />
							</form>

						</div>
					</div>
				';
			}
			function whs(){
				echo '
					<div class="row">
						<div class="column">
							<br> 
							<iframe  class = "main" src="https://docs.google.com/presentation/d/e/2PACX-1vTz0rPQ1BvIP6Kq_xXHBc-G44PGTXXbcuDcEncKydFUkY7Loia_kxZrUaf1lKw6Kq1sss1S68EupzqW/embed?start=false&loop=false&delayms=3000" frameborder="0" width="725" height="550" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
							<br><br>
						</div>
						<div class="column, right">
							<br><br>
							<form action="index2.php">
		    					<input type="submit" name="whsQuiz" value="Quiz" onClick="whsQuiz()" />
							</form>

						</div>
					</div>
				';
			}
			function contacts(){
				echo '
					 <form class="pure-form, form1" action="index2.php" method="post">
						<fieldset>
						  <br><br>
						  <label for="firstname">First Name</label> 
						  <input type="text" name="firstname" placeholder="first name">
						  
						  <label for="lastname">Last Name</label> 
						  <input type="text" name="lastname" placeholder="last name">
						  <br><br>
						  <label for="email">Email</label> 
						  <input type="text" name="email" placeholder="email">
						  <label for="company">Company</label> 
						  <input type="text" name="company" placeholder="company">
						  <br><br>
						  <input type="submit" name="contactsSubmit" value="Submit" onClick = "contactsSubmit()">
						  <br><br>
						</fieldset>
					</form> 
			   ';
			}
			function ppandgQuiz() {
				 echo '
					 <form class="pure-form, form1" action="index2.php" method="post">
						<fieldset> 
						 <br><br>
						 Q1. Who do you report to when atttending the OSI site?
						  <br><br> 
						   <input type="radio" name="q1" value="A"> A. Report to Gatehouse/Reception <br>
						   <input type="radio" name="q1" value="B"> B. Report to QA <br>
						   <input type="radio" name="q1" value="C"> C. Report to Supervisor <br>
						   <input type="radio" name="q1" value="D"> D. A and C 
						   <br><br>
						 Q2. What colour hats do the wardens wear during an evacuation?
						  <br><br> 
						   <input type="radio" name="q2" value="A"> A. White & Yellow <br>
						   <input type="radio" name="q2" value="B"> B. Red & Yellow <br>
						   <input type="radio" name="q2" value="C"> C. Yellow & Orange <br>
						   <input type="radio" name="q2" value="D"> D. Orange & Red
						   <br><br>
						 Q3. What should you immediately do if you notice an evironmental issue while working at OSI?
						  <br><br> 
						   <input type="radio" name="q3" value="A"> A. Report it immediately to your supervisor <br>
						   <input type="radio" name="q3" value="B"> B. Wash it down the drain <br>
						   <input type="radio" name="q3" value="C"> C. Ignore it <br>
						   <input type="radio" name="q3" value="D"> D. Call the Police 
						   <br><br>
						 Q4. When are the Emergency Evancuation/Firm Alarms tested?
						  <br><br> 
						   <input type="radio" name="q4" value="A"> A. Tuesday at 7pm <br>
						   <input type="radio" name="q4" value="B"> B. Sunday at 9 am and 4 pm <br>
						   <input type="radio" name="q4" value="C"> C. Monday at 10:30 am and 4 pm <br>
						   <input type="radio" name="q4" value="D"> D. Monday at 11 am <br><br>
						   <input type="submit" name="pp&gQuizMark" value="Submit" onClick="ppandgQuizMark()">
						   <br><br>
						</fieldset>
					</form> 
				 ';
			}
			function gmpQuiz() {
				 echo '
					 <form class="pure-form, form1" action="index2.php" method="post">
						<fieldset>
						  <br><br>

						 Q1. What do the letters GMP stand for?
						  <br><br> 
						   <input type="radio" name="q1" value="A"> A. Great Meat Production <br>
						   <input type="radio" name="q1" value="B"> B. Good Manufacturing Practices <br>
						   <input type="radio" name="q1" value="C"> C. Giant Mouse People <br>
						   <input type="radio" name="q1" value="D"> D. Good Music Program 
						   <br><br>
						 Q2. When must you wear white disposable PPE?
						  <br><br> 
						   <input type="radio" name="q2" value="A"> A. Inside the Plant, when working in process <br> 
						   <input type="radio" name="q2" value="B"> B. Going to the Toilet <br>
						   <input type="radio" name="q2" value="C"> C. Walking around outside <br>
						   <input type="radio" name="q2" value="D"> D. Driving to work
						   <br><br>
						 Q3. Who do you need to consult after you have found a Food Contact Surface that is contaminated after Maintenance has finished working on it? 
						  <br><br> 
						   <input type="radio" name="q3" value="A"> A. Process Control Coordinator <br>
						   <input type="radio" name="q3" value="B"> B. Supervisor <br>
						   <input type="radio" name="q3" value="C"> C. Equiptment Operator <br>
						   <input type="radio" name="q3" value="D"> D. All of the above
						   <br><br>
						 Q4. What do we call the accidental addition of an Allergen to Non-Allergen Food?
						  <br><br> 
						   <input type="radio" name="q4" value="A"> A. Cross Word <br>
						   <input type="radio" name="q4" value="B"> B. Cross Contact <br>
						   <input type="radio" name="q4" value="C"> C. Cross Contamination <br>
						   <input type="radio" name="q4" value="D"> D. Cross Breeding 
						   <br><br>
						 Q5. Give an example of when you need to wash your hands?
						  <br><br> 
						   <input type="radio" name="q5" value="A"> A. Toilet <br>
						   <input type="radio" name="q5" value="B"> B. Touching Dirty Surfaces <br>
						   <input type="radio" name="q5" value="C"> C. Entering the Plant <br>
						   <input type="radio" name="q5" value="D"> D. All of these <br><br>
						   <input type="submit" name= "gmpQuizMark" value="Submit" onClick="gmpQuizMark()">
						   <br><br>
						</fieldset>
					</form> 
				 ';
			}
			function haccpQuiz() {
				 echo '
					 <form class="pure-form, form1" action="index2.php" method="post">
						<fieldset>
							  <br><br>

							 Q1. What type of System is HACCP?
							  <br><br> 
							   <input type="radio" name="q1" value="A"> A. Food Safety System <br>
							   <input type="radio" name="q1" value="B"> B. Financial System Practices <br>
							   <input type="radio" name="q1" value="C"> C. Food Diretary System <br>
							   <input type="radio" name="q1" value="D"> D. Social Awareness System
							   <br><br>
							 Q2. What must you do if you lose a Loose Item, Tools or part of your PPE in the Production facility?
							  <br><br> 
							   <input type="radio" name="q2" value="A"> A. Stop and Tell the Supervisor <br> 
							   <input type="radio" name="q2" value="B"> B. Inform the Process Control Coordinator <br>
							   <input type="radio" name="q2" value="C"> C. Ignore it <br>
							   <input type="radio" name="q2" value="D"> D. Both A and B <br><br>
							 Q3. Accurate information regarding contamination is vital in the event of?
							  <br><br> 
							   <input type="radio" name="q3" value="A"> A. Story Telling <br>
							   <input type="radio" name="q3" value="B"> B. Product Recall<br>
							   <input type="radio" name="q3" value="C"> C. a Power Outage <br>
							   <input type="radio" name="q3" value="D"> D. All of the above
							   <br><br>
							 Q4. Name each of the example contaminants according to each of the 3 types of contaminants? ie Physical, Chemical or Biological
							  <br><br> 
							  Viruses = 
							   <select name="Viruses" class = "pure-input">
							   		<option value="" selected="selected"></option>
							   		<option value = "Chemical">Chemical</option>
							   		<option value = "Biological">Biological</option>
							   		<option value = "Physical">Physical</option>
							   </select>
							   <br>
							   Glass = 
							   <select name="Glass" class = "pure-input">
							   		<option value="" selected="selected"></option>
							   		<option value = "Chemical">Chemical</option>
							   		<option value = "Biological">Biological</option>
							   		<option value = "Physical">Physical</option>
							   </select>
							   <br>
							   Oil = 
							   <select name="Oil" class = "pure-input">
							   		<option value="" selected="selected"></option>
							   		<option value = "Chemical">Chemical</option>
							   		<option value = "Biological">Biological</option>
							   		<option value = "Physical">Physical</option>
							   </select>
							   <br><br>
							   <input type="submit" name="haccpQuizMark" value="Submit" onClick="haccpQuizMark()">
							   <br><br>
						</fieldset>
					</form> 
				 ';
			}
			function whsQuiz() {
				 echo '
					 <form class="pure-form, form1" action="index2.php" method="post">
						<fieldset>
							  <br><br>
							 Q1. Who is responsible for keeping a safe working environment?
							  <br><br> 
							   <input type="radio" name="q1" value="A"> A. Management <br>
							   <input type="radio" name="q1" value="B"> B. The Government <br>
							   <input type="radio" name="q1" value="C"> C. Everyone <br>
							   <input type="radio" name="q1" value="D"> D. The Army
							   <br><br>
							 Q2. What is a simple thing you can do to prevent repetitive Injuries?
							  <br><br> 
							   <input type="radio" name="q2" value="A"> A. Do not go to work <br> 
							   <input type="radio" name="q2" value="B"> B. Warm up and Streches <br>
							   <input type="radio" name="q2" value="C"> C. Work harder <br>
							   <input type="radio" name="q2" value="D"> D. Get somone else to do it 
							   <br> <br>
							 Q3. If you have to physically move an object is it better to push or pull?
							  <br><br> 
							   <input type="radio" name="q3" value="A"> A. Push <br>
							   <input type="radio" name="q3" value="B"> B. Pull<br>
							   <br><br>
							 Q4. What does "LOTO" stand for?
							  <br><br> 
							   <input type="radio" name="q4" value="A"> A. Look Out Tag Out <br> 
							   <input type="radio" name="q4" value="B"> B. Loose Organs Tip Over <br>
							   <input type="radio" name="q4" value="C"> C. Leap over the Orchard
							   <br><br>
							 Q5. When operating a Crate-jack or Forklift, WHat must you do when approaching a Doorway or Blind-spot?
							 <br><br> 
							  <input type="radio" name="q5" value="A"> A. Cut the corner <br> 
							  <input type="radio" name="q5" value="B"> B. Ram People <br>
							  <input type="radio" name="q5" value="C"> C. Go Faster <br>
							  <input type="radio" name="q5" value="D"> D. Sound the Horn
							  <br><br>
							  Q6. Who must you "firstly" report and injury too?
							 <br><br> 
							  <input type="radio" name="q6" value="A"> A. The first Aid Officer <br> 
							  <input type="radio" name="q6" value="B"> B. Your Spouse <br>
							  <input type="radio" name="q6" value="C"> C. Workmates <br>
							  <input type="radio" name="q6" value="D"> D. The Fire Brigade
							  <br><br>
							  Q7. What must you do if you notice any Faulty Equiptment, Unsafe Areas or Near Misses? 
							 <br><br> 
							  <input type="radio" name="q7" value="A"> A. Go Home <br> 
							  <input type="radio" name="q7" value="B"> B. Inform the Supervisor <br>
							  <input type="radio" name="q7" value="C"> C. Ignore it and Keep working <br>
							  <input type="radio" name="q7" value="D"> D. Be Careful
							  <br><br>
							  <input type="submit" name="whsQuizMark" value="Submit" onClick="whsQuizMark()">
							  <br><br>
							</fieldset>
					</form> 
				 ';
			}
			function contactsSubmit() {
				if ($_POST["firstname"] == NULL || $_POST["lastname"] == NULL || $_POST["email"] == NULL || 
				$_POST["company"] == NULL) {
					contacts();
				} else {
					$_SESSION["firstname"] = $_POST["firstname"];
					$_SESSION["lastname"] = $_POST["lastname"];
					$_SESSION["email"] = $_POST["email"];
					$_SESSION["company"] = $_POST["company"];
					$_SESSION["Contacts"] = "yes";
					echo'<p>Successfully posted<p>';
				}
			}
			function ppandgQuizMark() {
				if (isset($_POST["q1"]) == FALSE || isset($_POST["q2"]) == FALSE  || isset($_POST["q3"]) == FALSE || isset($_POST["q4"]) == FALSE ) {
					echo '
					<form class = "left" action="/index2.php">
					<p> You did not answer all the questions <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="pp&g" value="Revise for Quiz" onClick="ppandg()" />
					</form>';
				}
				else if ($_POST["q1"] == "D" & $_POST["q2"] == "A" & $_POST["q3"] == "A" & $_POST["q4"] == "C") {
					$_SESSION["Quiz1"] = "yes";
					echo '
						<p>You passed PP&G click another module <br> <p>
					';
				} else {
					echo '
					<form class = "left" action="/index2.php">
					<p>  You Failed <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="pp&g" value="Revise for Quiz" onClick="ppandg()" />
					</form>';
				}	
			}
			function gmpQuizMark() {
				if (isset($_POST["q1"]) == FALSE || isset($_POST["q2"]) == FALSE  || isset($_POST["q3"]) == FALSE || isset($_POST["q4"]) == FALSE
					|| isset($_POST["q5"]) == FALSE) {
					echo '
					<form class = "left" action="/index2.php">
					<p>  You did not answer all the questions <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="gmp" value="Revise for Quiz" onClick="gmp()" />
					</form>';
				}
				else if ($_POST["q1"] == "B" & $_POST["q2"] == "A" & $_POST["q3"] == "D" & $_POST["q4"] == "C"& $_POST["q5"] == "D") 
				{
					$_SESSION["Quiz2"] = "yes";
					echo '
						<p>You passed GMP click another module <br> <p>
					';
				} else {
					echo '
					<form class = "left" action="/index2.php">
					<p>  You Failed <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="gmp" value="Revise for Quiz" onClick="gmp()" />
					</form>';
				}	
			}
			function haccpQuizMark() {
				if (isset($_POST["q1"]) == FALSE || isset($_POST["q2"]) == FALSE  || isset($_POST["q3"]) == FALSE || isset($_POST["Viruses"]) == FALSE
					|| isset($_POST["Glass"]) == FALSE || isset($_POST["Oil"]) == FALSE) {
					echo '<form class = "left" action="/index2.php">
					<p>  You did not answer all the questions <br>
					Look at the Presentation and attempt it again <br> <p>
	    			<input type="submit" name="haccp" value="Revise for Quiz" onClick="haccp()" />
					</form>';
				}
				else if ($_POST["q1"] == "A" & $_POST["q2"] == "D" & $_POST["q3"] == "B" & $_POST["Viruses"] == "Biological" & $_POST["Glass"] == "Physical" & $_POST["Oil"] == "Chemical") {
					$_SESSION["Quiz3"] = "yes";
					echo '
						<p>You passed HACCP click another module <br> <p>
					';
				} else {
					echo '<form class = "left" action="/index2.php">
					<p>  You Failed <br>
					Look at the Presentation and attempt it again <br> <p>
	    			<input type="submit" name="haccp" value="Revise for Quiz" onClick="haccp()" />
					</form>';
				}	
			}
			function whsQuizMark() {
				if (isset($_POST["q1"]) == FALSE || isset($_POST["q2"]) == FALSE  || isset($_POST["q3"]) == FALSE || isset($_POST["q4"]) == FALSE 
					|| isset($_POST["q5"]) == FALSE || isset($_POST["q6"]) == FALSE || isset($_POST["q7"]) == FALSE){
					echo '<form class = "left" action="/index2.php">
					<p> You did not answer all the questions <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="whs" value="Revise for Quiz" onClick="whs()"" />
					</form>';
				}
				else if ($_POST["q1"] == "C" & $_POST["q2"] == "B" & $_POST["q3"] == "A" & $_POST["q4"] == "A" & $_POST["q5"] == "D" & $_POST["q6"] == "A" & $_POST["q7"] == "B") {
					$_SESSION["Quiz4"] = "yes";
					
					echo '
					<p>You Passed WHS click another module <br><p>
					';
				} else {
					echo '<form class = "left" action="/index2.php">
					<p>  You Failed <br>
					Look at the Presentation and attempt again <br> <p>
	    			<input type="submit" name="whs" value="Revise for Quiz" onClick="whs()"" />
					</form>';
				}	
			}
			function completeSubmit() {
				IF (isset($_SESSION["Quiz1"])==FALSE || isset($_SESSION["Quiz2"])==FALSE || isset($_SESSION["Quiz3"])==FALSE || isset($_SESSION["Quiz4"])==FALSE) {

				} else if ($_SESSION["Quiz1"] == "yes" & $_SESSION["Quiz2"] == "yes" & $_SESSION["Quiz3"] == "yes" & $_SESSION["Quiz4"] == "yes" ) {
					$date = date_create();
					$time = date_timestamp_get($date);
					$handle = fopen("./inducted.txt", "a");
					$dataEntry = "\r\n{$_SESSION["firstname"]},{$_SESSION["lastname"]},{$_SESSION["email"]},{$_SESSION["company"]},{$time}";
					fwrite($handle, $dataEntry);
					echo '
					<h1> Congratulations you have completed all the modules and this has been logged in the system. <br><h1>
					';
				}
			}

	   		session_start();
			if (isset($_SESSION["sessionInit"]) != true) {
				echo '<form method="post" id="passwordForm">';
				echo '<br><br><br>';
				echo '<div class="password">';
        		echo '<label for="name">Password: </label>';
        		echo '<input type="text" id="password" name="password">';
        		echo'<input type="submit" value="Submit" >';
    			echo '</div>';
    			echo'</form>';
    			if (isset($_POST['password'])){
    				$password = $_POST['password'];
    					if ($password = "osiTester") {
    						$_SESSION["sessionInit"] = "On";
    						header( "refresh:0.1;" );
    					} else {
    						$_SESSION["sessionInit"] = "Off";
							echo '
								<script>
									alert("Incorrect password");		
								</script>';	
    					}
    			}
			} else {
				IF ($_SESSION["sessionInit"] == "On") {
					echo'<form action="index2.php">';
					echo'<input type="image" name="index" value="index" src="osi-logo.png" alt= "OSI Group" onclick="contacts()" />';
					if (isset($_SESSION["Contacts"]) == true) {
						echo'<input type="submit" class="completed" name="contacts" value="Contacts" onclick="contacts()" />';
					} else {
						echo'<input type="submit" class="uncompleted" name="contacts" value="Contacts" onclick="contacts()" />';
					}
					if (isset($_SESSION["Quiz1"]) == true) {
						echo'<input type="submit" class="completed" name="pp&g" value="PP&G" onclick="ppandg()" />';
					} else {
						echo'<input type="submit" class="uncompleted" name="pp&g" value="PP&G" onclick="ppandg()" />';
					}
					if (isset($_SESSION["Quiz2"]) == true) {
						echo'<input type="submit" class="completed" name="gmp" value="GMP" onclick="gmp()" />';
					} else {
						echo'<input type="submit" class="uncompleted" name="gmp" value="GMP" onclick="gmp()" />';
					}
					if (isset($_SESSION["Quiz3"]) == true) {
						echo'<input type="submit" class="completed" name="haccp" value="HACCP" onclick="haccp()" />';
					} else {
						echo'<input type="submit" class="uncompleted" name="haccp" value="HACCP" onclick="haccp()" />';
					}
					if (isset($_SESSION["Quiz4"]) == true) {
						echo'<input type="submit" class="completed" name="whs" value="WHS" onclick="whs()" />';
					} else {
						echo'<input type="submit" class="uncompleted" name="whs" value="WHS" onclick="whs()" />';
					}
					echo'</form>';
					if($_GET || $_POST){
					    if(isset($_GET['contacts'])){
					        contacts();
					    }elseif(isset($_GET['pp&g'])){
					        ppandg();
					    }elseif(isset($_GET['gmp'])){
					        gmp();
					    }elseif(isset($_GET['haccp'])){
					        haccp();
					    }elseif(isset($_GET['whs'])){
					        whs();
					    }elseif(isset($_GET['index'])){
					        initial();
					    }elseif(isset($_GET['pp&gQuiz'])){
					        ppandgQuiz();
					    }elseif(isset($_GET['gmpQuiz'])){
					        gmpQuiz();
					    }elseif(isset($_GET['haccpQuiz'])){
					        haccpQuiz();
					    }elseif(isset($_GET['whsQuiz'])){
					        whsQuiz();
					    }elseif(isset($_POST['pp&gQuizMark'])){
					        ppandgQuizMark();
					        completeSubmit();
					    }elseif(isset($_POST['gmpQuizMark'])){
					        gmpQuizMark();
					        completeSubmit();
					    }elseif(isset($_POST['haccpQuizMark'])){
					        haccpQuizMark();
					        completeSubmit();
					    }elseif(isset($_POST['whsQuizMark'])){
					        whsQuizMark();
					        completeSubmit();
						}elseif(isset($_POST['contactsSubmit'])){
						    contactsSubmit();
						    completeSubmit();
						    }
					}else {
					    initial();
					}
				} else {
					initial();
				}
			}
		?>
	</body>
</html>