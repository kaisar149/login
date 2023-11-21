<?php
global $con;
session_start();

include ("connections.php");
include ("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index Page</h1>

    <br>
    Hello, <?php echo $user_data['user_name']; ?>

</body>
</html>
