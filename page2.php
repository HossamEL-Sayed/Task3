<?php

$username = $_POST['username'];
$message = $_POST['message'];

echo "Welcome Mr. " . $username . ". </br>";

if (!($message == "")) {
	echo "Your message is : " . $message . ".";
}
?>