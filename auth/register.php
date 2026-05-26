<?php

include("../config/db.php");

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $checkEmail);

    if(mysqli_num_rows($result) > 0){

        echo "Email already exists";

    } else {

        $sql = "INSERT INTO users(fullname,email,password)
                VALUES('$fullname','$email','$password')";

        if(mysqli_query($conn,$sql)){

            echo "Registration successful";

        } else {

            echo "Registration failed";

        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Register</title>

    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<h2>Create Account</h2>

<form method="POST">

    <input type="text"
           name="fullname"
           placeholder="Full Name"
           required>

    <input type="email"
           name="email"
           placeholder="Email"
           required>

    <input type="password"
           name="password"
           placeholder="Password"
           required>

    <button type="submit" name="register">
        Register
    </button>

</form>

</body>
</html>