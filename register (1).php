<?php
    include("connect.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobno = $_POST['mobno'];
    $nicno = $_POST['nic'];
    $address = $_POST['adress'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpwd'];
    $image = $_FILES['myImage']['name'];
    $tmp_name = $_FILES['myImage']['tmp_name'];

    if ($password==$cpassword){
         move_uploaded_file($tmp_name, "../uploads/$image")
         $insert = mysqli_query($connect, "INSERT INTO voter (fisrtname, lastname, mob_no, nic_no, email, pswd, photo, address,status ) VALUES ('$fname','$lname','$mobno','$nicno','$email','$password','$image','$address','Voted')");
         if ($insert) {
            echo '
            <script>
                alert("Registeration Succesful!");
                window.location = "../";
            </script>
        ';
        }
         else {
            echo '
            <script>
                alert("Some error occured!");
                window.location = "../routes/register.html";
            </script>
        ';
        }
    }
    else{
        echo '
            <script>
                alert("Password and Confirm password does not match!");
                window.location = "../routes/register.html";
            </script>
        ';
    }



?>