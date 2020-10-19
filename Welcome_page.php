<?php
session_start();
?>

<?php
$pageTitle ='System';
require_once('Header.html');
?>
<?php
echo "<br><br>";
echo "<div id=\"Username\">";

if(!isset($_SESSION['LoggedIn'])){

   die(header("Location:login.php"));
}
else{

   echo "Hello,"." ".$_SESSION['SESS_user']."!  "."<a class = \"LogOFF\" href =\"logOut.php\">Log Off</a>";

}
echo "</div>";
echo "<div class=\"Content1\">";

require_once('connektion.php');
$query = "SELECT ID, user FROM userpass LIMIT 1 ";
$data = mysqli_query($link,$query);
echo "<a class = \"H1-Title\" href = \"#\">Edit your Profile</a>";
echo "<span class =\"Picture\"><img src =\"Imagery/Background.png\">";
echo "</span>";
echo "</div>";


require_once('footer.html');
?>


   
	