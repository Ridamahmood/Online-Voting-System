<?php
session_start();
include("connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($connect,"SELECT * from voter WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($check)>0 {
	$voterdata = mysqli_fetch_array($check);
	$candidate = mysqli_query($connect, "SELECT * FROM candidate");
	$candidatedata = mysqli_fetch_all($candidate, MYSQL_ASSOC);

	$_SESSION['voterdata'] = $voterdata;
	$_SESSION['candidatedata'] = $candidatedata;

	echo '
    <script>
        window.location = "../routes/dashboard.php";
    </script>
';
}
else{
	echo '
            <script>
                alert("Invalid Credentials or User not found!");
                window.location = "../";
            </script>
        ';
}


?>