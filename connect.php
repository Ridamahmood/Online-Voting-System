<?php

$connect = mysqli_connect("localhost", "root", "ronaldo8", "new_schema") or die("connection failed!");

if ($connect) {
	echo "Connected!";
} else {
	echo "Not Connected!";
}

?>
