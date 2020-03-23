
<?php
	include('../container/header.php');

?>
<head>
	<style type="text/css">
		span{
			/*padding-left:80px;*/
			color:#fffdab;
			background-color:#012342;

		}
		h4 {
			background-color:#ffffae;
			color:#000432;
			width: 235px;
		}


        body{
            padding-top: 70px;
            padding-left: 50px;
        }
        .bs-example{
            margin: 20px;
        }
         a {    
            text-decoration:none;
            display: inline-block;
            padding:8px 16px;
        }
        a:hover{
            background-color: #dddddd;
            color:black;
        }
        .previous{
            background-color:#f1f1f1;
            color:black;
        }
        .next{
            background-color:#4caf50;
            color:white;
        }
        .round{
            border-radius:55%;
        }
	</style>
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-xs-4">
			<p>
				<?php
					print "<h5><i><b>[</b>" . $ID ."<b>]</b></i>". " " .$question . "<BR></h5><hr>";
					print "<i>". $answerA . "</i>". " " . $imgTagA . " <b>" . $percentA . "%</b> " . "</span><BR>";
					print "<i>". $answerB . " " . "</i>". $imgTagB . " <b>" . $percentB . "%</b> " .  "</span><BR>";
					print "<i>". $answerC . " " . "</i>". $imgTagC . " <b>" . $percentC . "% </b>" .  "</span><BR>";
					print "<i>". $answerD . " " ."</i>". $imgTagD . " <b>" . $percentD . "% </b>" . "</span><BR>";

				?>
			</p>
			<p><a href="../qms2/qms_one.php" target="_blank" class="next round pull-center">Proceed to NEXT (QES) Section &#8250; </a></p>
		</div>
		<div class="col-xs-4">
			<h4><center>Respondents' Ratings</center></h4>
			<p>

				<?php
					echo "<p>$qA". " ". "Poeple strongly agree <br />";
					echo "<p>$qB". " ". "Poeple Agree  <br />";
					echo "<p>$qC". " ". "Poeple disagree <br />";
					echo "<p>$qD". " ". "Poeple strongly disagree <br />";
				?>
			</p>
			<!--<p><a href="" target="#" class="btn btn-success">More &raquo;</a></p>-->
		</div>
		<div class="col-xs-4">
			<h4>Highest and Lowest Ratings</h4>
			<p>
				<?php
					//caching the total number of respondents for each question
						$total = $qA + $qB + $qC + $qD;
						$total_AB = $qA + $qB;
						$total_CD = $qC + $qD;
						$percent_AB = $percentA + $percentB;
						$percent_CD = $percentC + $percentD;
					if (($percentA>$percentB) && ($percentA>$percentC) && ($percentA>$percentD)) {
					echo "<p>Wow!". " ". $qA. " "."out of"." ". $total. " ". "people with". " <i><b>".$percentA ."%". " <span>"."STRONGLY AGREE </span></b></i></p><br />";
					# code...
					}else if(($percentB>$percentA) && ($percentB>$percentC) && ($percentB>$percentD)) {
					echo "<p>". $qB. " "."out of"." ". $total. " "."people with". " <i><b>".$percentB. "%". " <span>"."AGREE </span></b></i></p><br />";
					# code...
					}else if(($percentC>$percentA) && ($percentC>$percentB) && ($percentC>$percentD)) {
					echo "<p>". $qC. " "."out of"." ". $total." ". "people with". " <i><b>".$percentC. "%".  " <span>"."DISAGREE </span></b></i></p><br />";
					# code...
					}else if(($percentD>$percentA) && ($percentD>$percentB) && ($percentD>$percentC)) {
					echo "<p>Huh!". " ". $qD. " "."out of"." ". $total." ". "people with". " <i><b>".$percentD. "%".  " <span>"."STRONGLY DISAGREE </span></b></i></p><br />";
					# code...
					}else if($percentA = $percentB){
					echo "<p>". $total_AB. " ". "out of" ." ". $total. " ". "people with". " <i><b>".$percent_AB. "%". " <span>"."AGREE  </span></b></i></p><br />";
					# code...
					}else if($percentC = $percentD){
					echo "<p>". $total_CD. " " . "out of ". " ". $total. " ". "people with". " <i><b>".$percent_CD. "%". " <span>"."DISAGREE  </span></b></i></p><br />";
					}else{
						echo "Match input!";
					}
					# code..

					if (($percentA<$percentB) && ($percentA<$percentC) && ($percentA<$percentD)) {
						echo "<p>". $qA. " ". "out of". " ". $total. " ". "people with". " <i><b>".$percentA. "%".  " "."STRONGLY AGREE </b></i></p><br />";
					# code...
					}else if(($percentB<$percentA) && ($percentB<$percentC) && ($percentB<$percentD)) {
						echo "<p>". $qB. " ". " "."out of". " ". $total. " ". "people with". " <i><b>".$percentB. "%".  " "."AGREE </b></i></p><br />";
					# code...
					}else if(($percentC<$percentA) && ($percentC<$percentB) && ($percentC<$percentD)) {
						echo "<p>". $qC. " ". " ". "out of". " ". $total. " ". "people with". " <i><b>".$percentC. "%". " "."DISAGREE </b></i></p><br />";
					# code...
					}else if(($percentD<$percentA) && ($percentD<$percentB) && ($percentD<$percentC)) {
						echo "<p>". $qD. " ". " ". "out of". " ". $total. " ". "people with". " <i><b>".$percentD. "%". " "."STRONGLY DISAGREE </b></i></p><br />";
					}else{
						echo "Match input!";
					}
					# code...

				?>
			</p>
			<!--<p><a href="#" target="#" class="btn btn-success">More &raquo;</a></p>-->
		</div>
	</div>
	<hr>
	

	
</body>
</html>