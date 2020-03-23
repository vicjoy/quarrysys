<?php
			


			if ($result->num_rows > 0) {
				$db_field = $result->fetch_assoc();

				$ID = $db_field['ID'];
				$question = $db_field['Question'];
				$answerA = $db_field['OptionA'];
				$answerB = $db_field['OptionB'];
				$answerC = $db_field['OptionC'];
				$answerD = $db_field['OptionD'];

				$qA = $db_field['Strongly_Agree'];
				$qB = $db_field['Agree'];
				$qC = $db_field['Disagree'];
				$qD = $db_field['Strongly_Disagree'];

				$totalP = $qA + $qB + $qC + $qD;

				$percentA = (($qA * 100) / $totalP);
				$percentA = floor($percentA);

				$percentB = (($qB * 100) / $totalP);
				$percentB = floor($percentB);

				$percentC = (($qC * 100) / $totalP);
				$percentC = floor($percentC);

				$percentD = (($qD * 100) / $totalP);
				$percentD = floor($percentD);

				$imgWidthA = $percentA * 2;
				$imgWidthB = $percentB * 2;
				$imgWidthC = $percentC * 2;
				$imgWidthD = $percentD * 2;
				$imgTagA = "<IMG SRC = '../green.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthA. ">";
				$imgTagB = "<IMG SRC = '../blue.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthB . ">";
				$imgTagC = "<IMG SRC = '../purple.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthC . ">";
				$imgTagD = "<IMG SRC = '../red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthD . ">";

				include "result_output.php";

							}
