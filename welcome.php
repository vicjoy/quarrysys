<?php
// Initialize the session
include './container/header.php';
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        body{ font: 12px sans-serif; text-align: center; }
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
                    line-height:50px;
                }
                .next{
                    background-color:#4caf50;
                    color:white;
                    font-weight: 50%;
                }
                .round{
                    border-radius:60%;
                }

    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><span class"glyphicon glyphicon-log-in"></span><?php echo htmlspecialchars($_SESSION["username"]) ; ?></b>! Welcome to QuarrySYS.</h1>
    </div>
    <h3 class="alert previous">
      	
    			The Questions provided in QuarrySYS are majorly for research purpose. Kinldly respond to our questionnaire by clicking the suitable option one after the other...
    			The questions are segmented into EIGHT sections.
    			<pre>
    				

    			</pre>
    </h3>

    		<h1><a href="../qms/qms_one.php" target="_blank" class="next round">Continue to (QMS) Section... &#8250; </a></h1>

    </center>    
</body>
</html>