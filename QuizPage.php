<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz</title>
        <link rel="stylesheet" href="Style_Sheets/style.css">
        <link rel="stylesheet" href="Style_Sheets/QuizPageStyle.css">
        <style>
            .div {
                text-align: center;
                padding: 10px;
            }
            .Current{
                background: rgba(188, 7, 7, 0.7);
                border-radius: 6px;
                color:rgb(0, 0, 0);
                font-size: 20px;
            }
            
            
        </style>

    </head>
    <script>
        
        var questionNum = 0;

        function nextButton(){
            if(questionNum==0){
                document.getElementById("Next").setAttribute("value", "Next");
            }
            questionNum++;
            document.getElementById("outOf").innerHTML = questionNum;
        }


        function checkAnswer(obj){
            window.alert(obj.value);
        }


    </script>

    <body>
        <nav>
            <div class="logo">BNR</div>
            <ul>
                <li><a href = "HomePage.html">Home</a></li>
                <li><a href = "AboutPage.html">About</a></li>
                <li><a href = "RacesPage.html">Races</a></li>
                <li><a href = "ClassesPage.html">Classes</a></li>
                <li><a href = "BooksPage.html">SourceBooks</a></li>
                <li><a href = "CampainePage.html">Campaigns</a></li>
                <li><a class="Current" href = "QuizPage.php">Quiz</a></li>
            </ul>
        </nav>
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

        //Take 2D array and process for human readability
        $i = 0;
        $currentQuestion = ($quizArray[$i]);
        $currentResponses = array_slice($currentQuestion,2,4);
        shuffle($currentResponses);
        ?>

        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/bqbuyeHSmFo?controls=0&playsinline=1&autoplay=1&mute=1&playlist=bqbuyeHSmFo&loop=1"></iframe>
            <!--name of video used: Beautiful Eye Fantasy Red Dragon 🔴 Live Wallpaper-->
            <!--name of youtuber: Buddy Star -->
        </div>

        
        
        <div class="container">
            <h1></h1>
            <form action="result.php" method="post" id="quiz">

                <ol>
                    <h1>Test your Knowledge with a quiz for Dungeons &amp; Dragons</h1>
                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-1-correct"></label>
                        <input type="hidden" name="question-1-correct" value="<?php echo $currentQuestion[5]; ?>">
                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-1-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-1-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-1-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-1-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                        <?php
                        $i++;
                        $currentQuestion = ($quizArray[$i]);
                        $currentResponses = array_slice($currentQuestion,2,4);
                        shuffle($currentResponses);
                        ?>
                    </li>

                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-2-correct"></label>
                        <input type="hidden" name="question-2-correct" value="<?php echo $currentQuestion[5]; ?>">
                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-2-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-2-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-2-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-2-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                        <?php
                        $i++;
                        $currentQuestion = ($quizArray[$i]);
                        $currentResponses = array_slice($currentQuestion,2,4);
                        shuffle($currentResponses);
                        ?>
                    </li>

                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-3-correct"></label>
                        <input type="hidden" name="question-3-correct" value="<?php echo $currentQuestion[5]; ?>">

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-3-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-3-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-3-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-3-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                        <?php
                        $i++;
                        $currentQuestion = ($quizArray[$i]);
                        $currentResponses = array_slice($currentQuestion,2,4);
                        shuffle($currentResponses);
                        ?>
                    </li>

                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-4-correct"></label>
                        <input type="hidden" name="question-4-correct" value="<?php echo $currentQuestion[5]; ?>">
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-4-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-4-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-4-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-4-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                        <?php
                        $i++;
                        $currentQuestion = ($quizArray[$i]);
                        $currentResponses = array_slice($currentQuestion,2,4);
                        shuffle($currentResponses);
                        ?>
                    </li>

                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-5-correct"></label>
                        <input type="hidden" name="question-5-correct" value="<?php echo $currentQuestion[5]; ?>">
                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-5-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-5-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-5-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-5-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                        <?php
                        $i++;
                        $currentQuestion = ($quizArray[$i]);
                        $currentResponses = array_slice($currentQuestion,2,4);
                        shuffle($currentResponses);
                        ?>
                    </li>

                    <li>

                        <h3><?php echo $currentQuestion[1];?></h3>
                        <label for="question-6-correct"></label>
                        <input type="hidden" name="question-6-correct" value="<?php echo $currentQuestion[5]; ?>">

                        <div>
                            <input type="radio" name="question-6-answers" id="question-6-answers-A" value="<?php echo $currentResponses[0];?>" />
                            <label for="question-6-answers-A">A) <?php echo $currentResponses[0];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-6-answers" id="question-6-answers-B" value="<?php echo $currentResponses[1];?>" />
                            <label for="question-6-answers-B">B) <?php echo $currentResponses[1];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-6-answers" id="question-6-answers-C" value="<?php echo $currentResponses[2];?>" />
                            <label for="question-6-answers-C">C) <?php echo $currentResponses[2];?></label>
                        </div>

                        <div>
                            <input type="radio" name="question-6-answers" id="question-6-answers-D" value="<?php echo $currentResponses[3];?>" />
                            <label for="question-6-answers-D">D) <?php echo $currentResponses[3];?></label>
                        </div>
                    </li>

                </ol>
                <div class="Submit">
                <input type="submit" value="Submit" class="submitbtn" />
                </div>
            </form>

        </div>

       
       
    </body>
</html>
