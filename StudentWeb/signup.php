<?php
session_start(); 
        include("connection.php");
        include("functions.php");

       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
       
       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
        $user_id = random_num(20); 
        $query = "insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
       }else{
        echo "Please enter some valid information!";
       }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
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
        
    </style>
</head>
<body>
    <div id="box">
        <form method="post">
            <div style="font-size: 30px; margin: 10px; font-family: sans-serif; color:white;"><b>Signup</b></div><br><br>
            <div style="color: white;">Username</div>
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <div style="color: white;">Password</div>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>
            <div style="color: white;">Have an account?</div>
            <div style="color: white;">Click to <a href="login.php">Login</a></div><br><br>
        </form>
    </div>
</body>
</html>
