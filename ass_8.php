<!DOCTYPE html>
<html>
<body>
    <h2>Student Grading System</h2>
    <form method="post">
        Subject 1: <input type="number" name="s1"><br>
        Subject 2: <input type="number" name="s2"><br>
        Subject 3: <input type="number" name="s3"><br>
        Subject 4: <input type="number" name="s4"><br>
        Subject 5: <input type="number" name="s5"><br>
        <input type="submit" name="submit2" value="Get Result">
    </form>

    <?php
    if(isset($_POST['submit2'])){
        $total = $_POST['s1'] + $_POST['s2'] + $_POST['s3'] + $_POST['s4'] + $_POST['s5'];
        $percentage = $total / 5;
        
        echo "Total Marks: $total <br>";
        echo "Percentage: $percentage% <br>";

        // Question 4 Grading Logic
        if($percentage >= 90) $grade = "A+";
        elseif($percentage >= 80) $grade = "A";
        elseif($percentage >= 70) $grade = "B+";
        elseif($percentage >= 60) $grade = "B";
        elseif($percentage >= 50) $grade = "C";
        else $grade = "Fail";

        echo "Grade: $grade";
    }
    ?>
</body>
</html>