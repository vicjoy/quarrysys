<?php

	//include the file here now....
	include "result_handler.php";

	if ($db_found) {

		$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 1');
		if ($SQL) {
			//$SQL->bind_param('i', $qNum);
			$SQL->execute();

			$result = $SQL->get_result();


						include "chart.php";

									}
						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 2');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 3');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 4');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 5');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 6');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 7');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 8');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}
		if ($db_found) {

				$SQL = $db_found->prepare('SELECT * FROM qes_table WHERE ID = 9');
				if ($SQL) {
					//$SQL->bind_param('i', $qNum);
					$SQL->execute();

					$result = $SQL->get_result();


						include "chart.php";

									}

						else {
							print "ROW ERROR";
						}
					}else {
					print "database error";
				}

?>

