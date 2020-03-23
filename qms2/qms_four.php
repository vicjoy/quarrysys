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

        $stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD FROM qes_table WHERE ID = 4");

        include('qms_handler.php');
}
        else {
            print "Error getting Question";
        }
            include('qms_header.php');
?>

            <html>
            <body>
            <?php include('../bar/progress_45.php');?>
            <FORM NAME ="form1" METHOD ="GET" ACTION ="../model2/process_four.php">

           <?php

            include('qms_questions.php');
?>
            <div class="modal-footer" style="text-align:center">
                        
                        <button type="button" class="btn btn-primary" href="../qms/qms_three.php">Previous</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                        <input type="Submit" name="Submit1" class="btn btn-success" value="Next">
                        <INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
                    </form>
                </div>
            </body>
            </html>

<?php

        include('../container/footer.php');

?>