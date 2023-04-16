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
    <div>
    <?php
        //Define parameters needed to connect to SQL
        $user = "root";
        $pword = "gumpy";
        $dbase = "quizdatabase";
        $table = "questionFormat";

        //Connect to SQl database, throw error if it fail
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
    ?>
    </div>

        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/bqbuyeHSmFo?controls=0&playsinline=1&autoplay=1&mute=1&playlist=bqbuyeHSmFo&loop=1"></iframe>
            <!--name of video used: Beautiful Eye Fantasy Red Dragon 🔴 Live Wallpaper-->
            <!--name of youtuber: Buddy Star -->
        </div>
            
        <div class="BUTTONS">
            <input id="Button1"type="button" value="" onClick="checkAnswer(this)">
            <input id="Button2"type="button" value="" onClick="checkAnswer(this)">
            <input id="Button3"type="button" value="" onClick="checkAnswer(this)">
            <input id="Button4"type="button" value="" onClick="checkAnswer(this)">
            
        </div>
        <div>
            <span id="score">0</span> / <span id="outOf">0</span>
        </div>
        <div>
            <input id="next" type="button" value="Next" onClick="nextButton()">
        </div>


    </body>
</html>