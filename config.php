<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "technova";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}


$sqlquery = "INSERT INTO `register`(`name`, `email`, `program`, `branch`, `semester`, `number`) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["program"]."','".$_POST["branch"]."','".$_POST["semester"]."','".$_POST["number"]."')";


if ($conn->query($sqlquery) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sqlquery . "<br>" . $conn->error;
}	
?>