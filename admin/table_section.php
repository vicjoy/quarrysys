<?php

    include '../configure.php';
    include '../container/header.php';

?>
<!DOCTYPE html>
<html>
<head>

<title>Admin Page</title>
    
    
     <link href="sum_number/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<style type="text/css">
          
            h4{
                color:white;
                background-color: red;
                border-radius:50%;
                text-align: center;
            }
     </style>
</head>
<body>
<br>
<br>
<div class="container">
            <center>

                <div id="dropdown1" class="tab-pane">
            <h3>Quarry Management Systems (QMS) Table</h3>
                <?php include('qms_table.php');?>
        </div>
       <div id="dropdown2" class="tab-pane">
            <h3>Quarry Explosives Storage (QES) Table</h3>
                    <?php include('qes_table.php');?>
        </div>
        <div id="dropdown3" class="tab-pane">
            <h3>Quarry Blasting Practices (QBP) Table</h3>
                <?php include('qbp_table.php');?>
        </div>
        <div id="dropdown4" class="tab-pane">
            <h3>Quarry Isolation and Tagging (QIT) Table</h3>
                <?php include('qit_table.php');?>
        </div>
        <div id="dropdown5" class="tab-pane">
            <h3>Quarries Tipping on Stockpile (QTS) Table</h3>
                <?php include('qts_table.php');?>
        </div>
        <div id="dropdown6" class="tab-pane">
            <h3>Quarry Emergency Plans (QEP) Table</h3>
                    <?php include('qep_table.php');?>
        </div>
        <div id="dropdown7" class="tab-pane">
            <h3>Quarries Occupational Health (QOH) Table</h3>
                    <?php include('qoh_table.php');?>
        </div>
        <div id="dropdown8" class="tab-pane">
            <h3>Quarry Workshops (QWS) Table</h3>
                <?php include('qws_table.php');?>
        </div>

  
<br /> 

    </center>
  
	          

</div>                      
</body>
</html>

<?php
    include '../container/footer.php';

?>