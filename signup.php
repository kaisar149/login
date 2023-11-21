<?php
global $con;
session_start();

include ("connections.php");
include ("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //sth was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;

    }
    else{
        echo "Please enter valid information";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
        <h1>Sign Up</h1>
        <div class="input-box">
            <input type="text" name="user_name" id="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <label for="text"></label><input type="password" name="password" id="text" placeholder="Password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <input type="submit" value="Sign Up" id="button">

        <div class="register-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>
</div>
</body>
</html>
