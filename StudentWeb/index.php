<?php
session_start(); 
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">CS3A</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="activity.php">Activities</a></li>
                <li><a href="https://www.facebook.com/mjaypee98/">Contact</a></li>
            </ul>
        </nav>
        <button class="logout"><a href="logout.php">Logout</a></button>
    </header>
    <main>
        <h1>Welcome to the Home Page</h1>
    </main>
</body>
</html>
