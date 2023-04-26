
<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="Style_Sheets/style.css" />
</head>

<body>

<div id="page-wrap">

    <h1>Result</h1>

    <?php

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];

    $correctAnswer1 = $_POST['question-1-correct'];
    $correctAnswer2 = $_POST['question-2-correct'];
    $correctAnswer3 = $_POST['question-3-correct'];
    $correctAnswer4 = $_POST['question-4-correct'];
    $correctAnswer5 = $_POST['question-5-correct'];
    $correctAnswer6 = $_POST['question-6-correct'];

    $totalCorrect = 0;

    if ($answer1 == $correctAnswer1) { $totalCorrect++; }
    if ($answer2 == $correctAnswer2) { $totalCorrect++; }
    if ($answer3 == $correctAnswer3) { $totalCorrect++; }
    if ($answer4 == $correctAnswer4) { $totalCorrect++; }
    if ($answer5 == $correctAnswer5) { $totalCorrect++; }
    if ($answer6 == $correctAnswer6) { $totalCorrect++; }

    echo "<div id='results'>$totalCorrect / 6 correct</div>";

    ?>

</div>

</body>

</html>