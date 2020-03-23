<?php

		if ($stmt) {
			//$stmt->bind_param('i', $qID);
			$stmt->execute();
			$res = $stmt->get_result();

			if ($res->num_rows > 0) {

				$row = $res->fetch_assoc();

				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
				$D = $row['OptionD'];
			}
			else {
				print "Error - No rows";
			}
		}
		else {
			print "Error - DB ERROR";
		}
