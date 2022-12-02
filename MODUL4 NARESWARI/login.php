<?php
    if(!isset($_SESSION)){
        session_start();
    }

    require "../register-nares.php";
    require "../connector.php";

    if(isset($_POST["register"])){
        if(registrasi($_POST)){
            echo "<script> 
            alert('Berhasil Registrasi!');  
        </script>";
        }else{
            echo mysqli_error($conn);
        }
    }


    if (isset($_SESSION["login"])){
        header("Location: home-nares.php");
        exit;
    }

    if(isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($connect_user, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $_SESSION["email"] = $row["email"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["number"] = $row["number"];
                $_SESSION["login"] = true; 

                if(isset($_POST["remember"])){
                    setcookie("id", $row["id"], time()+60);
                    setcookie("key", hash("123", $row["email"]));
                }
                $_SESSION["message"] = "Berhasil Login";
                header("Location: home-nares.php ");
                exit;
            };
        }
        $error = true ;
    }
?>
