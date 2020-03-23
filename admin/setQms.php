<?PHP
require '../configure.php';
	$qID = '';
	$dropdown = '';
	$startSelect = "<select NAME=drop1>";
	$endSelect = "</select>";
	$wholeHTML = "";
	$getDropdownID = "";
	$hidTag = "";

	if (isset($_GET['Submit1'])) {

		$getDropdownID = $_GET['drop1'];

		header ("Location: ../qms/qms_one.php?h1=" . $getDropdownID);
	}

	$database = "questapp";

	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

	if ($db_found) {

		$stmt = $db_found->prepare("SELECT ID, Question FROM qms_table");

		if ($stmt) {

			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				while ( $row = $res->fetch_assoc() ) {

					$qID = $row['ID'];
					$question = $row['Question'];
					$dropdown = $dropdown . "<OPTION VALUE='" . $qID . "'>" . $question . "</OPTION>" . "<BR>";


				}
 
				$wholeHTML = $startSelect . $dropdown . $endSelect;
			}
			else {
				print "Error - No rows";
			}
	}
	else {
		print "Error - DB ERROR";
	}


 	}
	else {
		print "Error getting Questionnaire";
	}
?>
<html>
<head>
<title>Set a Question</title>
</head>

<body>
<FORM NAME ="form1" METHOD ="GET" ACTION ="setQms.php">
<?PHP print $wholeHTML; ?>
<P><INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Set a Question"></P>

</FORM>
</body>
</html>











