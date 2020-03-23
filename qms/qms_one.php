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

		$stmt = $db_found->prepare("SELECT ID, Question, OptionA, OptionB, OptionC, OptionD FROM qms_table WHERE ID = 1");

		include('qms_handler.php');

		}
		else {
			print "Error getting Question";
		}
	

	

    include('../container/header.php');

?>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
        	margin: 20px;
        }
    </style>
    </head>
<body>

<?php //include('../model/process.php') ?>

<div class="" style="text-align:center"> </div>


			<html>
			<body>
			<?php //inculde('../bar/progress_5.php');?>
			<FORM NAME ="form1" METHOD ="GET" ACTION ="../model/process_one.php">

			<?php

            include('qms_questions.php');
            include('qms_button.php');
?>
           