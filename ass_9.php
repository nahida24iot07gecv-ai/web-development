<!DOCTYPE html>
<html>
<body>
    <h2>Salary Calculator</h2>
    <form method="post">
        Basic Salary: <input type="number" name="basic"><br>
        HRA: <input type="number" name="hra"><br>
        DA: <input type="number" name="da"><br>
        <input type="submit" name="submit3" value="Calculate Salary">
    </form>

    <?php
    if(isset($_POST['submit3'])){
        $totalSalary = $_POST['basic'] + $_POST['hra'] + $_POST['da'];
        echo "Total Salary: ₹" . $totalSalary;
    }
    ?>
</body>
</html>