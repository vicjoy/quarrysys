<?PHP 
//require '../configure.php';
$answeredMessage = "";
session_start();
if ((isset($_SESSION['hasAnswered']))) {
	if ($_SESSION['hasAnswered'] = '1') {
		$answeredMessage = "You've already responded to this question";
	}
}
else {
	if (isset($_GET['Submit1']) && isset($_GET['q'])) {

		$selected_radio = $_GET['q'];
		$idNumber = $_GET['h1'];

			if (empty($_GET['q'])) {
				echo "<script> alert('Oops!!! You've not selected any option.); window.location='#'</script>";
			}else {

			$database = "questapp";

			$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

			if ($db_found) {

				if($selected_radio == "A") {
					$answeredSQL = "UPDATE tblsurvey SET Strongly_Agree = Strongly_Agree + 1 WHERE ID = ?";
					$answeredMessage = insert_answer($db_found, $answeredSQL, $idNumber);
					$alert = "Your previous response was saved successfully";
				}
				else if($selected_radio == "B"){
					$answeredSQL = "UPDATE tblsurvey SET Agree = Agree + 1 WHERE ID = ?";
					$answeredMessage = insert_answer($db_found, $answeredSQL, $idNumber);
					$alert = "Your previous response was saved successfully";
				}
				else if($selected_radio == "C"){
					$answeredSQL = "UPDATE tblsurvey SET Disagree = Disagree + 1 WHERE ID = ?";
					$answeredMessage = insert_answer($db_found, $answeredSQL, $idNumber);
					$alert = "Your previous response was saved successfully";
				}
				else if($selected_radio == "D"){
					$answeredSQL = "UPDATE tblsurvey SET Strongly_Disagree = Strongly_Disagree + 1 WHERE ID = ?";
					$answeredMessage = insert_answer($db_found, $answeredSQL, $idNumber);
					$alert = "Your previous response was saved successfully";
				}
				else {
					print "Error - could not record answer";
				}
			}	
		}
	}
	else {
		print "";
	}
}
function insert_vote($db, $sql, $id) {

	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	$stmt->execute();
}
	
