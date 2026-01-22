<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter Number: <input type="number" name="num" required>
        <input type="submit" name="calculate" value="Calculate All">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $n = $_POST['num'];
        echo "<h3>Results for $n:</h3>";

        // Task 1: Cube
        echo "Cube: " . ($n * $n * $n) . "<br>";

        // Task 2: Table
        echo "Table: ";
        for($i=1; $i<=10; $i++) { echo ($n * $i) . " "; }
        echo "<br>";

        // Task 3: Factorial
        $fact = 1;
        for($i=1; $i<=$n; $i++) { $fact *= $i; }
        echo "Factorial: $fact <br>";

        // Task 4: Prime Check
        $isPrime = true;
        if ($n < 2) $isPrime = false;
        for($i=2; $i <= sqrt($n); $i++) {
            if($n % $i == 0) { $isPrime = false; break; }
        }
        echo "Prime Status: " . ($isPrime ? "It is Prime" : "Not Prime");
    }
    ?>
</body>
</html>