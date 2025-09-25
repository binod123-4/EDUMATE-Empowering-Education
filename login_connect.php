<?php
include "config.php";

if(isset($_POST['login'])){ 
    $u_email = $_POST['useremail'];
    $u_pass = $_POST['userpassword'];

    $result = mysqli_query($con,"SELECT * FROM userdata WHERE email = '$u_email' AND password = '$u_pass'");

    if(mysqli_num_rows($result)){
        echo "
        
        <script>
            alert('Login Success');
            window.location.href = 'index1.html';
        </script>
        ";
    }
    else{
        echo "
        <script>
            alert('Incorrect Email/Password');
            window.location.href = 'login.php';
        </script>
        ";
    }
}

?>