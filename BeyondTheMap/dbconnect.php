<?php
//dbconnect.php
$con = mysqli_connect("localhost","root","");
if(!$con){
	die("Cannot connect". mysqli_error());
}
mysqli_select_db($con, "beyondthemap_db") or die("Cannot connect");
?>