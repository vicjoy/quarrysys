<?PHP
		require '../configure.php';
		$question = '';
		$answerA = '';
		$answerB = '';
		$answerC = '';
		$answerD = '';

		$imgTagA = '';
		$imgWidthA = '0';

		$imgTagB = '';
		$imgWidthB = '0';

		$imgTagC = '';
		$imgWidthC = '0';

		$imgTagD = '';
		$imgWidthD = '0';

		$imgHeight = '10';
		$totalP = '';
		$percentA = '0';
		$percentB = '0';
		$percentC = '0';
		$percentD = '0';

		$qA = '';
		$qB = '';
		$qC = '';
		$qD = '';



		//if (isset($_GET['Submit2']) && isset($_GET['h1'])) {

		//	$qNum = $_GET['h1'];

			$user_name = "root";

			//Configure these two lines to your database parameters...
			$password = "lenovo111";
			$database = "questapp";
			$server = "127.0.0.1";

			$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );
