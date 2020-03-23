<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quarry Management System</title>
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

<div class="alert alert-success"><?php if ($_SESSION['hasAnswered'] = "1"){
	echo "You previous response was saved successfully";
	}?> </div>

		<FORM NAME ="form1" METHOD ="GET" ACTION ="../model/process_new.php">

			<P>
			<?PHP print $question; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q' required="" value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
			<P>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'D' <?PHP print $answerD; ?>><?PHP print $D; ?>
			<P>

			<div class="modal-footer">
                        
            <button type="button" class="btn btn-primary" href="#">Previous</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
            <input type="Submit" name="Submit1" class="btn btn-success" value="Next">
            <INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
        </form>
    </div>
</body>
</html>
