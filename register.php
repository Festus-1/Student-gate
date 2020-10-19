<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<style type="text/css">
	
	form{
		font-size: 110%;
		margin: 0 auto;
		color: #ffffff;
		margin-left: 72px;
		
	}
	body{
		background-color: grey;	
	}
	.Dey{
		max-width: 350px;
		margin:30px auto;
		display: block;

	}
	input{
		height: 28px;
		width: 185px;
        margin: 0 auto;
	}
	#Heading{
		
		text-align: center;
	}
	#link{
		
		color: blue;
		margin-left: 75px;
		font-size: 15px;
		font-weight: bold;
	}
	.Message{
		color:#0000ff;
		text-align: center;
		font-size: 60%;
		margin-left: -25px;
	}
	#link1{
		color: #ffffff;
		text-decoration: none;
	}
	#Button{
		background-color: #ffffff;
		color: green;
		border: 2px solid green;
		border-radius: 15px;
		cursor: pointer;
	}
	#Button:hover{
		background-color: green;
		color: white;
	}
	.title{
		text-align: center;
		padding-top: 25px;
		font-size: 110%;
		color: white;
		font-weight: bold;
		margin-left: -25px;

	}	
</style>
<body>
	<div class="title">SCHOOL GATE<br/><br>
      <h5>Sign up</h5>
	</div>
	
	<div class="Dey">
		<div class="Message">
        <?php
require_once('connektion.php');

if(isset($_POST['submit'])){

	$User = $_POST['usern'];
	$Pass1 = $_POST['password'];
	$Pass2 = $_POST['conf'];

	


	if(empty($User) || empty($Pass1) || empty($Pass2)){

     echo "<h2>Please fill the empty field (s) !</h2>";
	}
	else if ($Pass1 != $Pass2) {
		
		echo "<h2>Passwords don't match!</h2>";
	}

else{


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++=
	$query = mysqli_query($link, "SELECT * FROM userpass WHERE user='".$User."'");
	   $numrows = mysqli_num_rows($query); 
	   if($numrows == 0) { 
	   //Insert to Mysqli Query 
	   $sql = "INSERT INTO userpass(user,pass) VALUES('$User',md5('$Pass1'))"; 
	   $result = mysqli_query($link, $sql); //Result Message 
	   if($result){ 
	   echo "<h2>Your Account has Created Successfully!</h2>";
	   	
	    
	} 
	else { echo "<h2>Failure!</h2>"; 
} 
} 
else { echo "<h2>That Username already exists! Please try again.</h2>"; 
} 
}
	
	

	
}
?>


		</div><br>
		<form action="" method="POST">
	<label for="Username">Username:</label><br>
	<input type="type" name="usern" id="Username"><br>
	<label for="Password">Password:</label><br>
	<input type="password" name="password" id="Password"><br>
	<label for="Password1">Confirm password:</label><br>
	<input type="password" name="conf" id="Password1"><br><br>

	<input type="submit" id="Button"  name="submit" value="Register">


</form><br><br>
<p  id="link">Already have an account?  <a id="link1" href="login.php">Login</a></p>
	</div>

</body>
</html>
	
        

