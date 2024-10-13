<?php
session_start(); 
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$user_name = $_POST['user_name'];
$password = $_POST['password'];
}

if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
$query = "select * from users where user_name = '$user_name' limit 1";

$result = mysqli_query($con, $query);

if($result)
{
    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password)
        {
            $_SESSION['user_id'] = $user_data['user_id']; 
            header("Location: index.php");
            die;
        }
    }
}
echo "Wrong Username or Password!";
}else{

}
?>

    
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
        body {
            background-image: url('login.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: sans-serif;
        }
        #text {
            font-family: sans-serif;
            height: 35px;
            border-radius: 20px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button {
            padding: 10px;
            width: 100px;
            color: black;
            background-color: lightblue;
            border-radius: 20px;
            box-shadow: 22px 17px 33px 6px rgba(0,0,0,0.87);
            border: none;
        }
        #box {
            background: rgba(255, 255, 255, 0.1); 
            margin: auto;
            width: 350px;
            padding: 20px;
            margin-top: 250px;
            box-shadow: 22px 17px 19px 20px rgba(0,0,0,0.87);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            text-align: center;
        }
        #avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: -60px;
            border: 2px solid white;
        }
    </style>
</head>
<body>
    <div id="box">
        <img id="avatar" src="avatar.jpg" alt="Avatar">
        <form method="post">
            <div style="font-size: 30px; margin: 10px; font-family: sans-serif; color:white;"><b>Login</b></div><br><br>
            <div style="color: white;">Username</div>
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <div style="color: white;">Password</div>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="button" type="submit" value="Login"><br><br>
            <div style="color: white;">Don't have an account?</div>
            <div style="color: white;">Click to <a href="signup.php">Signup</a></div><br><br>
        </form>
    </div>
</body>
</html>
