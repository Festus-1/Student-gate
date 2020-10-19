<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
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
		
		color: #00ff00;
		margin-left: 65px;
		font-size: 15px;
		font-weight: bold;
	}
	.Message{
		color:#00ff00;
		text-align: center;
		font-size: 100%;
		margin-left: -25px;
	}
	#link1{
		color: #ffffff;
		text-decoration: none;
	}
	#Button{
		background-color: #ffffff;
		color: #0000ff;
		border: 2px solid #0000ff;
		border-radius: 15px;
		cursor:pointer; 

	}
	.title{
		text-align: center;
		padding-top: 25px;
		font-size: 110%;
		color: white;
		font-weight: bold;
		margin-left: -25px;

	}
	#Button:hover{
		background-color: #0000ff;
		color: #ffffff;
	}	
</style>
<body>

	<div class="title">SCHOOL GATE<br/><br>
      <h5>Sign In</h5>
	</div>
	
	<div class="Dey">
		<div class="Message">
        

        	<?php
//require_once('connektion.php');

if(isset($_POST["submit"])){


	 if(!empty($_POST['usern']) && !empty($_POST['password'])){


		 $user = $_POST['usern'];
		 $pass = $_POST['password'];
		 //DB Connection
		 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
		 //Select DB From database
		 $db = mysqli_select_db($conn, 'fiston') or die("databse error");
		 //Selecting database
		 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
		 $numrows = mysqli_num_rows($query);
		 if($numrows !=0)
		 {


			 while($row = mysqli_fetch_assoc($query))
			 {
			 $dbusername=$row['user'];
			 $dbpassword=$row['pass'];
			 }

		    if($user == $dbusername && $pass == $dbpassword)
			 {
			 session_start();
			 $_SESSION['SESS_user'] = $user;
			 $_SESSION['LoggedIn'] = true;
			 //Redirect Browser
			 header("Location:welcome_page.php");
			 }

			}

			 else
			 {
			 echo "Invalid Username or Password!";
			 }
		    
	    }

	 
	 else
	 {
	 echo "Required All fields!";
	 }


}
?>


		</div>
		<br>
		<form action="" method="POST">
	<label for="Username">Username:</label><br>
	<input type="type" name="usern" id="Username"><br>
	<label for="Password">Password:</label><br>
	<input type="password" name="password" id="Password"><br>
	<br>

	<input type="submit" id="Button"  name="submit" value="Login">


</form><br><br>
<p  id="link">Don't you have an account?  <a id="link1" href="register.php">Create it.</a></p>
	</div>

</body>
</html>