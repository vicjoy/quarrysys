<?PHP
require '../configure.php';
    if (isset($_GET['h1'])) {
        $qID = $_GET['h1'];
    } else {
        $qID = 1 ;
    }

    $question = 'Question not set';
    $answerA = 'unchecked';
    $answerB = 'unchecked';
    $answerC = 'unchecked';
    $answerD = 'unchecked';

    $A = "";
    $B = "";
    $C = "";
    $D = "";

    $database = "questapp";

    $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

    if ($db_found) {

        $stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD FROM qms_table WHERE ID = 17");

        include('qms_handler.php');
}
        else {
            print "Error getting Question";
        }
            include('qms_header.php');
?>

            <html>
            <body>
            <?php include('../bar/progress_95.php');?>
            <FORM NAME ="form1" METHOD ="GET" ACTION ="../model/process_seventeen.php">

            </body>
            </html>
<?php

            include('qms_questions.php');
            include('qms_button.php');
    

?>