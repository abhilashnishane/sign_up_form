<?php

$FName=$_REQUEST['txtFName'];
$LName=$_REQUEST['txtLName'];

$gender=$_REQUEST['xGender'];
$DoB=$_REQUEST['DOB'];
$emailID=$_REQUEST['emailID'];
$password=$_REQUEST['password'];

$theCity=$_REQUEST['selectedCity'];


if(isset($_REQUEST['interest']))
{
	$theInterests=$_REQUEST['interest'];
}


$x="";
foreach ($theInterests as $key => $value) 
{
	$x.="<br>".$value;
}


echo "<div id='container'><table border=2>";
echo "<tr><th>Fields</th><th>Values</th></tr>";
echo "<tr><td>Full Name</td><td>".$FName." ".$LName."</td></tr>";
echo "<tr><td>Gender</td><td>".$gender."</td></tr>";
echo "<tr><td>Date of Birth</td><td>".$DoB."</td></tr>";
echo "<tr><td>E-mail ID</td><td>".$emailID."</td></tr>";
echo "<tr><td>Password</td><td>".$password."</td></tr>";
echo "<tr><td>City</td><td>".$theCity."</td></tr>";
echo "<tr><td>Interests</td><td>".$x."</td></tr>";
echo "</table></div>";




?>

<style>
	body {
		font-family: Helvetica,Arial, Sans-serif;
		background: #999999; /*#555555*/
		line-height: 2em;
	}

	#container {
			border:2px solid #555555;
			width:45%;
			margin:auto;
			background: #777777;
			/*padding-left: 3%;*/
			padding-top: 2%;
			box-shadow: 4px 4px 10px 1px black;
			padding-bottom: 3%;
			/*color:white;*/
			color: #f5f5f5;
		}

	table {
		color: #f5f5f5;
		text-align: center;
		margin:auto;
		line-height: 2em;
		width:80%;
	}	
</style>