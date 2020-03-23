<?PHP  
require '../configure.php';
$voteMessage = "";
session_start();
if ((isset($_SESSION['hasVoted']))) {
	if ($_SESSION['hasVoted'] = '1') {
		$voteMessage = "You've already responded to this question";
	}
}
else {
	if (isset($_GET['Submit1']) && isset($_GET['q'])) {

		$selected_radio = $_GET['q'];
		$idNumber = $_GET['h1'];

		$database = "questapp";

		$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

		if ($db_found) {

			if($selected_radio == "A") {
				$votedSQL = "UPDATE qms_table SET Strongly_Agree = Strongly_Agree + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else if($selected_radio == "B"){
				$votedSQL = "UPDATE qms_table SET Agree = Agree + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else if($selected_radio == "C"){
				$votedSQL = "UPDATE qms_table SET Disagree = Disagree + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else if($selected_radio == "D"){
				$votedSQL = "UPDATE qms_table SET Strongly_Disagree = Strongly_Disagree + 1 WHERE ID = ?";
				$voteMessage = insert_vote($db_found, $votedSQL, $idNumber);
			}
			else {
				print "Error - could not record vote";
			}	
		}
	}
	else {
		print "You didn't select any option!";
	}
}

function insert_vote($db, $sql, $id) {

	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	$stmt->execute();

	//$_SESSION['hasVoted'] = '1';
	//return "Thanks for your response!";
	//header('survey2.php'); 
	echo "<script>alert('Thanks for your response! Check the Outcome'); window.location='viewResults.php'</script>";
}
