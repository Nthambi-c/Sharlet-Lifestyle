<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include("../config/db.php");

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($check) > 0){

        $_SESSION['error'] = "Email already exists";

        header("Location: ../index.php");
        exit();

    } else {

        mysqli_query(
            $conn,
            "INSERT INTO users(fullname,email,password)
             VALUES('$fullname','$email','$password')"
        );

        $_SESSION['success'] = "Account created successfully. Please login.";

header("Location: ../index.php?login=1");
exit();
    }
}



if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($query) > 0){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];

            header("Location: ../index.php");
            exit();

        } else {

            $_SESSION['error'] = "Wrong password";

            header("Location: ../index.php");
            exit();
        }

    } else {

        $_SESSION['error'] = "User not found";

        header("Location: ../index.php");
        exit();
    }
}



if(isset($_GET['logout'])){

    session_destroy();

    header("Location: ../index.php");
    exit();
}
?>