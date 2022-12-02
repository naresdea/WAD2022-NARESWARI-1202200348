<?php 
require "connector.php";
function registrasi ($data){
    global $connect_user;

    $email = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];


    $result = mysqli_query($connect_user, "SELECT email FROM users WHERE email = '$email' ");
    if(mysqli_fetch_assoc($result)){
        echo "<script> alert('Email telah dipakai') </script>";
        return false;
    }
    if( $password !== $confpass){
        echo "<script> alert('Password berbeda') </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect_user, "INSERT INTO users VALUES (
        '','$email', '$name', '$password','$number'
    )");

    return mysqli_affected_rows($connect_user);

}


?>