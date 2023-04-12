<?php
//Define parameters needed to connect to SQL
$user = "root";
$pword = "gumpy";
$dbase = "quizdatabase";
$table = "questionFormat";

//Connect to SQl database, throw error if it fails
$mydb = new mysqli('localhost', $user, $pword, $dbase);
if ($mydb->connect_error) {
    die( "Failed to connect to MySQL: " . $mydb->connect_error);
}

//Query to generate result of entire table
$query = "SELECT * FROM $table";
$result = mysqli_query($mydb, $query);

//Turn result in to 2D array, then shuffle
$quizArray = mysqli_fetch_all($result);
shuffle($quizArray);

//Output question and answers
for($i = 0; $i != count($quizArray); $i++) {
    //Take 2D array and process for human readability
    $currentQuestion = ($quizArray[$i]);
    $currentResponses = array_slice($currentQuestion,2,4);
    shuffle($currentResponses);

    //Line break before everything but first question
    if( $i != 0)
        print_r("\n");

    //Question header
    print_r("Question " . $i+1 . ": " . $currentQuestion[1]);

    //Possible responses
    print_r("\n" . "A: ". $currentResponses[0]);
    print_r("\n" . "B: ". $currentResponses[1]);
    print_r("\n" . "C: ". $currentResponses[2]);
    print_r("\n" . "D: ". $currentResponses[3]);

    //Correct response
    print_r("\n" . "Answer: ". $currentQuestion[5]);
}
