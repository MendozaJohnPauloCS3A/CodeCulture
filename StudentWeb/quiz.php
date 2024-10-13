<?php
$score = 0;
$totalQuestions = 10;
$answers = [
    'q1' => 'a',
    'q2' => 'd',
    'q3' => 'a',
    'q4' => 'b',
    'q5' => 'd',
    'q6' => 'a',
    'q7' => 'a',
    'q8' => 'a',
    'q9' => 'd',
    'q10' => 'a'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science Quiz</title>
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
        <h2>Computer Science Quiz</h2>
        <form id="quizForm" method="post" action="">
            <div class="question">
                <p>1. What does CPU stand for?</p>
                <label><input type="radio" name="q1" value="a"> Central Processing Unit</label><br>
                <label><input type="radio" name="q1" value="b"> Central Process Unit</label><br>
                <label><input type="radio" name="q1" value="c"> Computer Personal Unit</label><br>
                <label><input type="radio" name="q1" value="d"> Central Processor Unit</label><br>
            </div>
            <div class="question">
                <p>2. Which language is used for web apps?</p>
                <label><input type="radio" name="q2" value="a"> PHP</label><br>
                <label><input type="radio" name="q2" value="b"> Python</label><br>
                <label><input type="radio" name="q2" value="c"> JavaScript</label><br>
                <label><input type="radio" name="q2" value="d"> All of the above</label><br>
            </div>
            <div class="question">
                <p>3. What is the main function of an operating system?</p>
                <label><input type="radio" name="q3" value="a"> To manage computer hardware and software resources</label><br>
                <label><input type="radio" name="q3" value="b"> To compile programs</label><br>
                <label><input type="radio" name="q3" value="c"> To edit documents</label><br>
                <label><input type="radio" name="q3" value="d"> To design websites</label><br>
            </div>
            <div class="question">
                <p>4. Which of the following is a non-volatile memory?</p>
                <label><input type="radio" name="q4" value="a"> RAM</label><br>
                <label><input type="radio" name="q4" value="b"> ROM</label><br>
                <label><input type="radio" name="q4" value="c"> Cache</label><br>
                <label><input type="radio" name="q4" value="d"> Register</label><br>
            </div>
            <div class="question">
                <p>5. Which of the following is a type of network topology?</p>
                <label><input type="radio" name="q5" value="a"> Star</label><br>
                <label><input type="radio" name="q5" value="b"> Tree</label><br>
                <label><input type="radio" name="q5" value="c"> Ring</label><br>
                <label><input type="radio" name="q5" value="d"> All of the above</label><br>
            </div>
            <div class="question">
                <p>6. What is the purpose of an IP address?</p>
                <label><input type="radio" name="q6" value="a"> To identify a device on a network</label><br>
                <label><input type="radio" name="q6" value="b"> To store data</label><br>
                <label><input type="radio" name="q6" value="c"> To encrypt information</label><br>
                <label><input type="radio" name="q6" value="d"> To manage user accounts</label><br>
            </div>
            <div class="question">
                <p>7. Which of the following is a sorting algorithm?</p>
                <label><input type="radio" name="q7" value="a"> Bubble Sort</label><br>
                <label><input type="radio" name="q7" value="b"> Linear Search</label><br>
                <label><input type="radio" name="q7" value="c"> Binary Search</label><br>
                <label><input type="radio" name="q7" value="d"> Depth-First Search</label><br>
            </div>
            <div class="question">
                <p>8. What does SQL stand for?</p>
                <label><input type="radio" name="q8" value="a"> Structured Query Language</label><br>
                <label><input type="radio" name="q8" value="b"> Simple Query Language</label><br>
                <label><input type="radio" name="q8" value="c"> Sequential Query Language</label><br>
                <label><input type="radio" name="q8" value="d"> Standard Query Language</label><br>
            </div>
            <div class="question">
                <p>9. Which language is used for web apps?</p>
                <label><input type="radio" name="q9" value="a"> PHP</label><br>
                <label><input type="radio" name="q9" value="b"> Python</label><br>
                <label><input type="radio" name="q9" value="c"> JavaScript</label><br>
                <label><input type="radio" name="q9" value="d"> All of the above</label><br>
            </div>
            <div class="question">
                <p>10. What does HTML stand for?</p>
                <label><input type="radio" name="q10" value="a"> Hyper Text Markup Language</label><br>
                <label><input type="radio" name="q10" value="b"> Hyperlinks and Text Markup Language</label><br>
                <label><input type="radio" name="q10" value="c"> Home Tool Markup Language</label><br>
                <label><input type="radio" name="q10" value="d"> Hyperlinking Text Markup Language</label><br>
            </div>
            <input type="submit" value="Submit">
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <p id="result">Your score is <?php echo $score; ?>/<?php echo $totalQuestions; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
