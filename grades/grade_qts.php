<?php

    include '../configure.php';

?>
<!DOCTYPE html>
<html>
<head>

<title>Result Page</title>
    
    
     <link href="sum_number/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<style type="text/css">
          
            h4{
                color:white;
                background-color: #eee;
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
                            <h2 class="alert alert-success" style="text-align:center">Thanks for your response</h2>
                            <?php 
                            $query=mysqli_query($mysqli, "select * from qts_table")or die(mysqli_error());
                            $numberOfRows= mysqli_num_rows($query);

                            echo "<h4>You've successfully attempted " . " " . $numberOfRows . " ". "Questions in QTS section</h4><br \>";

                            while($row=mysqli_fetch_array($query)){
                            $id=$row['ID'];
                            ?>
                    <!--
                                <tr>
                                     <td><?php echo $row['ID'] ?></td>
                                     <td><?php echo $row['Question'] ?></td>
                                     <td><?php echo $row['Strongly_Agree'] ?></td>
                                     <td><?php echo $row['Agree'] ?></td>
                                     <td><?php echo $row['Disagree'] ?></td>
                                     <td><?php echo $row['Strongly_Disagree'] ?></td>
                                </tr>
                                  <?php } ?>
                             
                          <?php
                            $result = mysqli_query($mysqli, "SELECT count(ID) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                        <tr>
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total:&nbsp;<?php 

                                            $totalID = $rows['count(ID)'];
                                            echo $totalID ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                            <?php
                            $result = mysqli_query($mysqli, "SELECT count(Question) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Questions:&nbsp;<?php 

                                            $totalQuestion = $rows['count(Question)'];
                                            echo $totalQuestion ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>

                           <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Strongly_Agree) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Strongly Agree:&nbsp;<?php 

                                            $sumStronglyAgree = $rows['sum(Strongly_Agree)'];
                                            echo $sumStronglyAgree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Agree) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Agree:&nbsp;<?php 

                                            $sumAgree = $rows['sum(Agree)'];
                                            echo $sumAgree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Disagree) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Disagree:&nbsp;<?php 

                                            $sumDisagree = $rows['sum(Disagree)'];
                                            echo $sumDisagree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                                <?php }
                                ?>
                                <?php
                            $result = mysqli_query($mysqli, "SELECT sum(Strongly_Disagree) FROM qts_table") or die(mysqli_error());
                            while ($rows = mysqli_fetch_array($result)) {
                                ?>
                            
                                    <td>
                                        <div class="pull-right">
                                            <div class="span"><div class="alert alert-success"><i class="icon-credit-card icon-large"></i>&nbsp;Total Agree:&nbsp;<?php 

                                            $sumStronglyDisagree = $rows['sum(Strongly_Disagree)'];
                                            echo $sumStronglyDisagree ."<br \> ";
                                        
                                           
                                        //echo $rows['sum(Agree)']; ?>
                                            </div></div>
                                        </div>
                                    </td>
                            </tr>
                                <?php }
                                ?>
                            
                             </tbody>
                        </table>

                 -->
                                    <div class="pull-center">
                                        <div class="span"><div class="alert alert-info"><i class="icon-credit-card icon-large"></i>&nbsp;<center>GRADED AUDIT CHART and COMPLIANCE to QuarrySYS:</center>&nbsp;<br><hr><?php 
                                        
                                        echo $sumStronglyAgree ." ". " Strongly Agreed". "<br \> ";
                                        echo $sumAgree . " ". " Agreed"."<br \> ";
                                        echo $sumDisagree . " ". " Disagreed"."<br \> ";
                                        echo $sumStronglyDisagree . " ". " Strongly Disagreed"."<br \><hr> ";
                                    
                                        $Total = $sumStronglyAgree + $sumAgree + $sumDisagree + $sumStronglyDisagree;
                                        $sumStronglyAgreePercent = (($sumStronglyAgree * 100) / $Total);
                                        $sumStronglyAgreePercent = floor(($sumStronglyAgree * 100) / $Total);
                                        $sumAgreePercent = (($sumAgree * 100) / $Total);
                                        $sumAgreePercent = floor(($sumAgree * 100) / $Total);
                                        $sumDisagreePercent = (($sumDisagree * 100) / $Total);
                                        $sumDisagreePercent = floor(($sumDisagree * 100) / $Total);
                                        $sumStronglyDisagreePercent = (($sumStronglyDisagree * 100) / $Total);
                                        $sumStronglyDisagreePercent = floor(($sumStronglyDisagree * 100) / $Total);

                                        echo $sumStronglyAgreePercent ."% Strongly Agreed<br \>";

                                        echo $sumAgreePercent ."% Agreed<br \>";

                                        echo $sumDisagreePercent ."% Disagreed<br \>";

                                        echo $sumStronglyDisagreePercent ."% Strongly Disagreed<br \><hr>";
                                        
                                        //echo $rows1['sum(Disagree)']; 

                                    //Let's Drop the Statistical Expression For Compliance By all Respondents and each Respondent;
                        $percentSumTotal = $sumStronglyAgreePercent + $sumAgreePercent + $sumDisagreePercent + $sumStronglyDisagreePercent;
                        $percentCompliance = $sumStronglyAgreePercent + $sumAgreePercent;
                        //echo $percentSumTotal . "<br />";
                        //echo $percentCompliance ." <br />";

                        if (($percentCompliance>=90)&&($percentCompliance<=100)) {
                            include '../bar/compliance/progress_95.php';
                        }elseif (($percentCompliance>=80)&&($percentCompliance<=89)) {
                            include '../bar/compliance/progress_85.php';
                        }elseif (($percentCompliance>=70)&&($percentCompliance<=79)) {
                            include '../bar/compliance/progress_75.php';
                        }elseif (($percentCompliance>=60)&&($percentCompliance<=69)) {
                            include '../bar/compliance/progress_65.php';
                        }elseif (($percentCompliance>=50)&&($percentCompliance<=59)) {
                            include '../bar/compliance/progress_55.php';
                        }elseif (($percentCompliance>=40)&&($percentCompliance<=49)) {
                            include '../bar/compliance/progress_45.php';
                        }elseif (($percentCompliance>=20)&&($percentCompliance<=39)) {
                            include '../bar/compliance/progress_25.php';
                        }elseif (($percentCompliance>=0)&&($percentCompliance<=19)) {
                            include '../bar/compliance/progress_15.php';
                        }else{
                            echo "error!!!";
                        }






                                        ?></div></div>
                                    </div>

                        <a href="../output5/qmsResults.php" target="_blank" class="previous round">&#8249;Check the Respondent Rating </a><a href="../qms6/qms_one.php" target="_blank" class="next round pull-right">Proceed to QEP Sections &#8250; </a>




                                

</div>                      
</body>
</html>
