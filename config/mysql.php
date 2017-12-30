<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'mm__mypage';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/

function mm__SelectUser($user){
	global $conn;
	$sql = "SELECT * FROM mm__users WHERE username = '".$user."'";
	$result = $conn->query($sql);

	return $result->fetch_assoc();
}
function mm__CheckLogged($user,$pass,$hash){
	global $conn;
	$sql = "SELECT * FROM mm__users WHERE username = '".$user."' AND pass = '".$pass."' AND userhash = '".$hash."'";
	$result = $conn->query($sql);

	return $result->fetch_assoc();
}
function mm__InsertUser($user,$pass,$hash){
	global $conn;
	$date = time();
	$sql = "INSERT INTO mm__users (username, pass, userhash, regdate, role)
		VALUES ('$user','$pass','$hash','$date','0')";
		
    if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
function mm__SelectAllUser(){
	global $conn;
	$sql = "SELECT * FROM mm__users";
	$result = $conn->query($sql);

	return $result;
}
?>