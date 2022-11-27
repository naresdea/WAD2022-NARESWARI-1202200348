<?php 
require "connector.php";
function registrasi ($data){
    global $connect_user;

    $email = strtolower(stripslashes($data["email"]));
    $name = strtolower(stripslashes($data["name"]));
    $number = strtolower(stripslashes($data["number"]));
    $password = mysqli_real_escape_string($connect_user,$data["password"]);
    $confpass = mysqli_real_escape_string($connect_user,$data["confpass"]);


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