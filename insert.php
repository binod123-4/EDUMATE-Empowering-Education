<?php

include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $confirm_password = ($_POST['confirm_password']);

    $dup_email = mysqli_query($con,"SELECT * FROM userdata WHERE email = '$email'");

    if(mysqli_num_rows($dup_email)){
        echo " 
            <script>
                alert('This Email is already taken');
                window.location.href = 'login.php';
            </script>
        ";
    }
    else{
        mysqli_query($con,"INSERT INTO userdata(name, email, password,cpassword) VALUES ('$name','$email','$password','$confirm_password')");
        echo "
        <script>
                window.location.href = 'login.php';
        </script>";
    }

}

?>