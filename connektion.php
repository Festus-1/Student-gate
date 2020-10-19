<?php
$link = mysqli_connect('localhost','root','','fiston');

if(!$link){
  
  echo "No database connection".mysql_error();
}

?>