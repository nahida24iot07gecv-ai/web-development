<?php
session_start();


$questions = [
    ["q" => "What does PHP stand for?", "options" => ["Personal Home Page", "Hypertext Preprocessor", "Pretext Hypertext Processor", "Pre-processor Home Page"], "ans" => 1],
    ["q" => "Which symbol is used for variables in PHP?", "options" => ["&", "!", "$", "#"], "ans" => 2],
    ["q" => "HTML files are saved with which extension?", "options" => [".ht", ".html", ".hml", ".txt"], "ans" => 2],
    ["q" => "What is the correct CSS syntax?", "options" => ["{body;color:black;}", "body:color=black;", "body {color: black;}", "all.body {color: black;}"], "ans" => 2],
    ["q" => "How do you write 'Hello World' in PHP?", "options" => ["echo 'Hello World';", "Document.Write('Hello World');", "print_f('Hello World');", "console.log('Hello World');"], "ans" => 0],
    ["q" => "Which Bootstrap class provides a responsive fixed width container?", "options" => [".container-fluid", ".container", ".row", ".container-fixed"], "ans" => 1],
    ["q" => "Which property is used to change the background color?", "options" => ["color", "bgcolor", "background-color", "back-style"], "ans" => 2],
    ["q" => "In PHP, which operator is used for concatenation?", "options" => ["+", "append()", ".", "&"], "ans" => 2],
    ["q" => "What is the default port for HTTP?", "options" => ["443", "80", "21", "8080"], "ans" => 1],
    ["q" => "Is Bootstrap a JavaScript framework?", "options" => ["Yes", "No", "It is a CSS framework", "Both B and C"], "ans" => 3]
];


if (!isset($_SESSION['current_q']) || isset($_POST['reset'])) {
    $_SESSION['current_q'] = 0;
    $_SESSION['score'] = 0;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['next'])) {
    $selected_ans = $_POST['answer'];
    $current_idx = $_SESSION['current_q'];
    
    
    if ($selected_ans == $questions[$current_idx]['ans']) {
        $_SESSION['score']++;
    }
    
    
    $_SESSION['current_q']++;
}

$current_q = $_SESSION['current_q'];
$total_q = count($questions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MCQ Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        .quiz-box { 
            max-width: 700px; margin: 50px auto; background: #fff; 
            padding: 40px; border: 2px solid #212529; border-radius: 12px;
            box-shadow: 8px 8px 0px #212529;
        }
        .option-btn { 
            display: block; width: 100%; text-align: left; margin-bottom: 10px;
            border: 1px solid #ddd; padding: 12px; border-radius: 8px; cursor: pointer;
        }
        .option-btn:hover { background-color: #f8f9fa; border-color: #212529; }
        input[type="radio"] { margin-right: 10px; }
        .next-btn { border: 2px solid #000; font-weight: bold; padding: 10px 40px; border-radius: 30px; }
    </style>
</head>
<body>

<div class="container">
    <div class="quiz-box">
        <?php if ($current_q < $total_q): ?>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="m-0">Question No. <?php echo ($current_q + 1); ?>/<?php echo $total_q; ?></h4>
                <span class="badge bg-dark">Score: <?php echo $_SESSION['score']; ?></span>
            </div>
            
            <hr>

            <form method="POST">
                <h5 class="mb-4"><?php echo $questions[$current_q]['q']; ?></h5>
                
                <?php foreach ($questions[$current_q]['options'] as $index => $opt): ?>
                    <label class="option-btn">
                        <input type="radio" name="answer" value="<?php echo $index; ?>" required>
                        <?php echo $opt; ?>
                    </label>
                <?php endforeach; ?>
                <div class="text-center mt-5">
                    <button type="submit" name="next" class="btn btn-light next-btn">
                        <?php echo ($current_q == $total_q - 1) ? "Finish Quiz" : "Next Question"; ?>
                    </button>
                </div>
            </form>

        <?php else: ?>
            <div class="text-center">
                <h2 class="text-success mb-4">Quiz Completed!</h2>
                <div class="display-4 mb-4">Final Score: <?php echo $_SESSION['score']; ?> / <?php echo $total_q; ?></div>
                <form method="POST">
                    <button type="submit" name="reset" class="btn btn-dark next-btn">Restart Quiz</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>