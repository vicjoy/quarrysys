<?php

    include('../container/header.php');


?>


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

<div class="alert alert-success" style="text-align:center"><?php if ($_SESSION['hasVoted'] = 1){
	echo "You previous response was saved successfully";
	}?> </div>