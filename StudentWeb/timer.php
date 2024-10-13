<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    switch ($action) {
        case 'start':
            $_SESSION['timer_start'] = time();
            break;
        case 'pause':
            $_SESSION['timer_pause'] = time() - $_SESSION['timer_start'];
            break;
        case 'continue':
            if (isset($_SESSION['timer_pause'])) {
                $_SESSION['timer_start'] = time() - $_SESSION['timer_pause'];
                unset($_SESSION['timer_pause']);
            }
            break;
        case 'stop':
            unset($_SESSION['timer_start']);
            unset($_SESSION['timer_pause']);
            break;
        case 'reset':
            $_SESSION['timer_start'] = time();
            $_SESSION['timer_pause'] = 0;
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    <link rel="stylesheet" href="timer.css">
</head>
<body>
    <div class="timer-container">
        <div class="timer">
            <span id="minutes">00</span>:<span id="seconds">00</span>
        </div>
        <div class="buttons">
            <button onclick="startTimer()">Start</button>
            <button onclick="pauseTimer()">Pause</button>
            <button onclick="continueTimer()">Continue</button>
            <button onclick="stopTimer()">Stop</button>
        </div>
    </div>
    
    <script src="timer.js"></script>
</body>
</html>
