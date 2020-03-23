<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example of Bootstrap 3 Modal Sizes</title>
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
<div class="bs-example">
    <!-- Large modal -->
	<button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Question 1</button>
 
    <div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Question 1</h4>
                </div>
                <div class="modal-body">
                   

                        <P>
                        <?PHP print $question; ?>
                        <P>
                        <INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
                        <P>
                        <INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
                        <P>
                        <INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
                        <P>
                        <P>
                        <INPUT TYPE = 'Radio' Name ='q'  value= 'D' <?PHP print $answerD; ?>><?PHP print $D; ?>
                        <P>

                        </div>
                        <div class="modal-footer">
                        
                        <button type="button" class="btn btn-primary">Previous</button>
                        <button type="button" name="Submit1" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                        <button type="button" name="Submit1" class="btn btn-secondary"> Next </button>
                        <INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>                                		                            