<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuarrySYS</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
        <style type="text/css">
        body{
            padding-top: 70px;
        }
        .bs-example{
            margin: 20px;
        }
        </style>
</head> 
<body>
<div class="bs-example">
    <div class="progress progress-striped">
		<div class="progress-bar progress-bar-info" style="width: 93%">
            <?php
                echo $percentCompliance ." %". " ". "Perfect Compliance";
            ?>
        </div>
        <h1 class="alert alert-danger"> Perfect Compliance</h1>
    </div>
</body>
</html>                            