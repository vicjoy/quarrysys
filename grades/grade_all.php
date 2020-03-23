<?php

    include '../configure.php';
    include '../container/header.php';
    

?>
<!DOCTYPE html>
<html>
<head>

<title>Result Page</title>
    
    
     <link href="sum_number/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<style type="text/css">
          
            h4{
                color:white;
                background-color: #000;
                border-radius:20%;
                text-align: center;
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
                    border-radius:50%;
                }
     </style>
</head>
<body>
<br>
<br>
<div class="container">
    
  
<br /> 
  
	     <table  class="table table-striped table-bordered">     
                    <!--
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Question</th>
                                    <th>Strongly Agree</th>
                                    <th>Agree</th>
                                    <th>Disagree</th>
                                    <th>Strongly Disagree</th>
                                </tr>
                            </thead>
                            <tbody>

                    -->
                            <h2 class="alert alert-success" style="text-align:center">Here are the outcomes of the attempted eight sections of QuarrySYS</h2>
							<?php 

                            include '../admin/qms_statistic.php';
                            include '../admin/qes_statistic.php';
                            include '../admin/qbp_statistic.php';
                            include '../admin/qit_statistic.php';
                            include '../admin/qts_statistic.php';
                            include '../admin/qep_statistic.php';
                            include '../admin/qoh_statistic.php';
                            include '../admin/qws_statistic.php';




							
							?>
					

                      




                                

</div>                      
</body>
</html>
<?php include '../container/footer.php'; ?>