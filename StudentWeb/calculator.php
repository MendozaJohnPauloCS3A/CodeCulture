<?php
$result = '';

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Bawal magdivide sa zero!!';
            }
            break;
        default:
            $result = 'Aba! may bagong Mathematical Operation?';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function resetForm() {
            document.getElementById('calculatorForm').reset();
            document.getElementById('result').textContent = '';
        }
    </script>
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
        <h2>Calculator</h2>
        <form id="calculatorForm" method="post" action="">
            <input type="number" name="num1" placeholder="Num1" required>
                
            <select name="operation">
                <option value="add">+ (Addition)</option>
                <option value="subtract">- (Subtraction)</option>
                <option value="multiply">x (Multiplication)</option>
                <option value="divide">÷ (Division)</option>
            </select>

            <input type="number" name="num2" placeholder="Num2" required>
            <br><br>
            <input type="submit" name="submit" value="Calculate">
            
            <button type="button" onclick="resetForm()">Clear</button>
        </form>
        <p id="result">Result: <?php echo $result; ?></p>
    </main>
</body>
</html>
