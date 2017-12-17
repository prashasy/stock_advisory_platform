



<html>
<head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<?php
	if(!(empty($_GET['msg'])) and  $_SESSION['index_page_redirect_counter'])
	{
		?>
		<script type="text/javascript">
		alert("You have signed up Successfully");
		</script>
		<?php
		$_SESSION['index_page_redirect_counter']=false;
	}

	?>
	<script type="text/javascript">


  function showfield(namea,nameb){

	document.getElementById(namea).style.display="none";
	document.getElementById(nameb).style.display="block";
  }


	</script>

	<title>Home Page!! </title>
	<style type="text/css">
	/* Tablet Landscape */

 

}
	body{
		font-family:courier;

	}


	
	.LoginContent{
		display:none;
		color:gray;
	}
	.LoginHover{
		position:absolute;
		top:255px;
		left:320px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:680px;
		text-align:center;
	    font-size: 30;
	    color:gray;
		background-color: white;

	}
	.LoginHover:hover .LoginContent{
		display:block;
	}

		.SignupContent{
		display:none;
		background-color: orange;
	}
	.SignupHover{
		position:absolute;
		top:255px;
		left:700px;
		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.SignupHover:hover .SignupContent{
		display:block;
	}



	.field{
		position:absolute;
		top:255px;
		left:320px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:650px;
		text-align:center;
	    font-size: 30;
	    color:gray;
		background-color: white;
		display:none;
	}

	#inputtext{
		color:gray;
	}

	</style>
	</head>

	<body id="primary">		
		<div class="w3-container w3-teal">
		<h1 class="w3-container w3-teal"style="text-align:left"> Welcome to Point K2 </h1>
		
		<div class="LoginHover" id="name">
			<p id="inputtext"> Hello Investor! </p><p id="inputtext"> Welcome to the world of wealth creation !!! </p>
				<div class=LoginContent>
					<p id="inputtext"> Your name please</p>
					<form name="name_form" target="_blank" action='input.php' method="post">
						<input type="text" name="field_name" value="Name" hidden></input>
						<input type="text" required name="name" placeholder="Name">
						<input type="submit" onclick="showfield('name','age')" value="Submit">
					</form>
				</div>
		</div>

		<div class="field" id="age" style="text-align:left">
			<p id="inputtext"> We will also need your Age</p>
			<form name='age_form' action='input.php' target="_blank" method="post">
				<input type="text" name="field_name" value="Age" hidden></input>
				<input type="number" name="age" required placeholder="Age"></input>
				<input type="submit" onclick="showfield('age','phone')" value="Submit">
			</form>
		</div>

		<div class="field" id="phone" style="text-align:left">
			<p id="inputtext"> We would contact you if important</p>
			<form name='phone_form' action='input.php' target="_blank" method="post">
				<input type="text" name="field_name" value="Phone" hidden></input>
				<input type="number" name="phone" required placeholder="Phone"></input>
				<input type="submit" onclick="showfield('phone','aadhar')" value="Submit">
			</form>
		</div>

		<div class="field" id="aadhar" style="text-align:left">
			<p id="inputtext"> Please enter your 12 digit Aadhar Number</p>
			<form name='aadhar_form' action='input.php' target="_blank" method="post">
				<input type="text" name="field_name" value="Aadhar" hidden></input>
				<input type="number" name="aadhar" required placeholder="Aadhar Number"></input>
				<input type="submit" onclick="showfield('aadhar','invest_amount')" value="Submit">
			</form>
		</div>
		<div class="field" id="invest_amount" style="text-align:left">
			<p id="inputtext"> Please enter investment amount</p>
			<form name='invest_amount_form' action='input.php' target="_blank" method="post">
				<br><input type="text" name="field_name" value="Invest_amount" hidden></input>
				<input type="radio" name='invest_amount' required value=1>INR 25000</input><br>
				<input type="radio" name='invest_amount' required value=2>INR 50000</input><br>
				<input type="radio" name='invest_amount' required value=3>INR 75000</input><br>
				<input type="radio" name='invest_amount' required value=4>INR 100000</input><br>
				<input type="submit" onclick="showfield('invest_amount','risk_level')" value="Submit">
			</form>
		</div>
		<div class="field" id="risk_level" style="text-align:left">
			<p id="inputtext"> What risk level are you comfortable with?</p>
			<form name='risk_level_form' action='input.php' target="_blank" method="post">
			<br><input type="radio" name="risk_level" required value=1>Risk Averse</input><br>
				<input type="radio" name="risk_level" required value=2>Risk Neutral</input><br>
				<input type="radio" name="risk_level" required value=3>Risk Seeker</input><br>
				<input type="text" name="field_name" required value="Risk_level" hidden></input>
				<input type="submit" onclick="showfield('risk_level','invest_horizon')" value="Submit">
			</form>
		</div>

		<div class="field" id="invest_horizon" style="text-align:left">
			<p id="inputtext"> What would be your Investment Horizon?</p>
			<form name='invest_horizon_form' action='input.php' target="_blank" method="post">
			<br><input type="text" name="field_name" value="Invest_horizon" hidden></input>
				<input type="radio" name="invest_horizon" required value=1>1 year</input><br>
				<input type="radio" name="invest_horizon" required value=1>2 year</input><br>
				<input type="radio" name="invest_horizon" required value=1>3 year</input><br>
				<input type="radio" name="invest_horizon" required value=1>4 year</input><br>
				<input type="radio" name="invest_horizon" required value=1>5 year</input><br>

				<input type="submit" onclick="showfield('invest_horizon','portf_type')" value="Submit">
			</form>
		</div>

		<div class="field" id="portf_type" style="text-align:left">
			<p id="inputtext"> We would contact you if important</p>
			<form name='portf_type_form' action='input.php' target="_blank" method="post">
				<input type="text" name="field_name" value="Portf_type" hidden></input>
				<input type="radio" name="portf_type" required value=1>Point K2 Flagship portfolio</input><br>
				<input type="radio" name="portf_type" required value=2>Sector portfolio</input><br>
				<input type="radio" name="portf_type" required value=3>Formula Investing Portfolio</input><br>
				<input type="submit" onclick="showfield('portf_type','portf_type')" value="Submit">
			</form>
		</div>





<!--	<div class="SignupHover">
			<p> SignUp </p>

			<div class="SignupContent">
				<form id="2" name="signup_form" onsubmit="return validate()" action="signup.php" method="post">
					<input type="text" name="name" required placeholder="Full name please :)">
					<input type="number" name="phno" required placeholder="Phone Number ;)">
					<input type="text" name="uname" required placeholder="Username">
					<input type="password" name="pass"required  placeholder="Password">
					<input type="submit" value="SignUp!!">
					<input type="reset">
				</form>

			</div>
		</div>

	</div>


	.LoginHover{
		position:absolute;
		top:255px;
		left:200px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}



	-->

















</body>
</html>
