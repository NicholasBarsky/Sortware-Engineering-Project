
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

    $totalCorrect = 0;

    if ($answer1 == "D") { $totalCorrect++; }
    if ($answer2 == "D") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    if ($answer6 == "D") { $totalCorrect++; }

    echo "<div id='results'>$totalCorrect / 6 correct</div>";

    ?>

</div>

</body>

</html>