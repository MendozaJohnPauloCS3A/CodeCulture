<?php
$score = 0;
$totalQuestions = 10;
$answers = [
    'q1' => 'Central Processing Unit',
    'q2' => 'HTML',
    'q4' => 'Debugging',
    'q5' => 'FIrewall',
    'q3' => 'John McCarthy',
    'q6' => 'RAM',
    'q7' => 'Virus',
    'q8' => 'CPU',
    'q9' => 'Protocol',
    'q10' => 'Stack'
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
                <label><input type="text" name="q1" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>2. What is the primary language used for web development?</p>
                <label><input type="text" name="q2" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>3. Who is the father of AI?</p>
                <label><input type="text" name="q3" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>4. What is the process of finding and fixing errors in software?</p>
                <label><input type="text" name="q4" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>5. What is the term for a network security system that monitors and controls incoming and outgoing network traffic?</p>
                <label><input type="text" name="q5" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>6. What is the main memory of a computer also known as?</p>
                <label><input type="text" name="q6" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>7. What is the term for a self-replicating program that spreads by inserting copies of itself into other programs?</p>
                <label><input type="text" name="q7" autocomplete="off"></label><br>
                </div>
            <div class="question">
                <p>8. What is the brain of the computer?</p>
                <label><input type="text" name="q8" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>9. What is the term for a set of rules that define how data is transmitted over a network?</p>
                <label><input type="text" name="q9" autocomplete="off"></label><br>
            </div>
            <div class="question">
                <p>10. What is the name of the data structure that follows the Last In, First Out (LIFO) principle?</p>
                <label><input type="text" name="q10" autocomplete="off"></label><br>
            </div>
            <input type="submit" value="Submit">
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <p id="result">Your score is <?php echo $score; ?>/<?php echo $totalQuestions; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
