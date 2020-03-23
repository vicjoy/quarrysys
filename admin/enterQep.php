<?PHP
//require '../configure.php';
include('../container/header.php');




if (isset($_GET['Sub1'])) {

	$question = $_GET['question'];
	$answerA = $_GET['AnswerA'];
	$answerB = $_GET['AnswerB'];
	$answerC = $_GET['AnswerC'];
	$answerD = $_GET['AnswerD'];

	$user_name = "root";
	$password = "lenovo111";
	$database = "questapp";
	$server = "192.168.101.1";

	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

	if ($db_found) {

		$SQL = "INSERT INTO qep_table (Question, OptionA, OptionB, OptionC, OptionD) VALUES (?,?,?,?,?)";

		$stmt = $db_found->prepare($SQL);
		if ($stmt) {
			$stmt->bind_param('sssss', $question, $answerA, $answerB, $answerC, $answerD);
			$stmt->execute();

			$message = "The question has been added to the database";
			echo "<script>window.location='../admin/questions_section.php'</script>";
		} else {
			print "Database - error";
		}
	}
	else {
		print "Database NOT Found ";
	}
}

?>
<html>
<head>
<title>Questionnaire Page</title>
</head>
<body>


	<div class="col-md-12" style="text-align:center">
		<FORM  class="" NAME ="form1" METHOD ="GET" class="form-control" ACTION ="enterQep.php">
		<p >
		Enter a question: <INPUT TYPE = 'TEXT' Name ='question'  class="input-lg" value="What is the Question?" maxlength="200" required="">
		</p>
		<p class="">
			Answer A: <INPUT TYPE = 'TEXT' Name ='AnswerA' class="input-lg"  value="Option A" maxlength="20" required=""><br>
		</p>
		<p>
			Answer B: <INPUT TYPE = 'TEXT' Name ='AnswerB' class="input-lg" value="Option B" maxlength="20" required=""><br>
		</p>
		<p>
			Answer C: <INPUT TYPE = 'TEXT' Name ='AnswerC' class="input-lg"  value="Option C" maxlength="20" required=""><br>
		</p>
		<p>
			Answer D: <INPUT TYPE = 'TEXT' Name ='AnswerD' class="input-lg" value="Option D" maxlength="20" required=""><br>
		</p>
		<P style="text-align:center" class="">
		<INPUT TYPE = "Submit" Name = "Sub1"  class="btn btn-primary" VALUE = "Add Your Question">
		</P>

		</FORM>
	</div>

</body>
</html>







