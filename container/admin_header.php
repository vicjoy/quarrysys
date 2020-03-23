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

     			span {	
                        text-decoration:none;
                        display: inline-block;
                        padding:8px 16px;
                    }
                    span:hover{
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
                        border-radius:50%;
                    }

</style>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="sr-only">QUARRY MANAGEMENT</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../welcome.php">QuarrySYS</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="./welcome.php" target=""><span class="glyphicon glyphicon-home"></span></a></li>
				
				<li><a href="../admin/collation.php" target="">Quarry Collation</a></li>
				<li><a href="../admin/questions_section.php" target="">Quarry Questions</a></li>
				<span class="next round">
	        		<li><a href="reset-password.php" class="btn btn-warning">Reset Password</a></li>
	        	</span>
	        	<span class="previous round">
	        		<li><a href="logout.php" class="btn btn-danger">Sign Out</a></li>
    			</span>
    			
			</ul>
		</div>
	</div>
</nav>