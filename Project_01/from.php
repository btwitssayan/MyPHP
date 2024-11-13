<?php
if(isset($_POST["name"])){
    $server = "localhost";
    $uername = "root";
    $password = "";

    $conn = mysqli_connect($server, $uername, $password);

    if (!$conn){
        die("Connection failed". mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `myfirst`.`myemp` (`sno`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password');";

    if ($conn->query($sql)){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
